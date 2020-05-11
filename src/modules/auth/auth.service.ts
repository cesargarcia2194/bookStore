import { ConflictException, Injectable, NotFoundException, UnauthorizedException } from '@nestjs/common';
import { AuthRepository } from './auth.repository';
import { InjectRepository } from '@nestjs/typeorm';
import { JwtService } from '@nestjs/jwt';
import { SigninDto, SignupDto } from './dto';
import { compare } from 'bcryptjs';
import { IJwtPayload } from './jwt-payload.interface';
import { RoleType } from '../role/role-type.enum';

@Injectable()
export class AuthService {

    constructor(
        @InjectRepository(AuthRepository)
        private readonly _authRepository: AuthRepository,
        private readonly _jwtService: JwtService
    ){}

    async signUp(signupDto: SignupDto): Promise<void>{
        const {username , email} = signupDto;
        const userExist = await this._authRepository.findOne({
            where:{username: username, email: email}
        });
        if(userExist){
            throw new ConflictException('Usuario ya exite')
        }
        return this._authRepository.signup(signupDto)
    }
    async signin(signinDto: SigninDto): Promise<{token: string}>{
        const {username, password} = signinDto;
        const user = await this._authRepository.findOne({
            where: {username}
        });
        if(!user) throw new NotFoundException('Usuario no existe');
        const isMatch = await compare(password, user.password);
        if(!isMatch) throw new UnauthorizedException('Contraseña invalida');

        const payload : IJwtPayload = {
            id: user.id,
            username: user.username,
            email: user.email,
            role: user.roles.map(el => el.name as RoleType)
        };
        const token = await this._jwtService.sign(payload);
        return {token}
    }
}
