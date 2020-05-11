import { PassportStrategy } from '@nestjs/passport';
import { ExtractJwt, Strategy } from 'passport-jwt';
import { ConfigService } from '../../../config/config.service';
import { Configuration } from '../../../config/confg.keys';
import { AuthRepository } from '../auth.repository';
import { InjectRepository } from '@nestjs/typeorm';
import { IJwtPayload } from '../jwt-payload.interface';
import { Injectable, UnauthorizedException } from '@nestjs/common';

@Injectable()
export class JwtStrategy extends PassportStrategy(Strategy){
    constructor(
        private readonly _configService: ConfigService,
        @InjectRepository(AuthRepository)
        private readonly _authRepository: AuthRepository
    ){
        super({
            jwtFromRequest: ExtractJwt.fromAuthHeaderAsBearerToken(),
            secretOrKey: _configService.get(Configuration.JWT_SECRET)
        })
    }

    async validate(payload: IJwtPayload){
        const { username } = payload;

        const userExist = await this._authRepository.findOne({
            where:{username: username, status: 'ACTIVE'}
        });
        if(!userExist){
            throw UnauthorizedException;
        }
        return payload
    }
}
