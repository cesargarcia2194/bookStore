import { BadRequestException, Injectable, NotFoundException } from '@nestjs/common';
import { UserRepository } from './user.repository';
import { InjectRepository } from '@nestjs/typeorm';
import { User } from './user.entity';
import { UserDTO } from './dto/user.dto';


@Injectable()
export class UserService {

    constructor(
        @InjectRepository(User)
        private readonly _userRepository: UserRepository) { }
    async get(id: number):Promise<User>{
        if(!id){
            throw new BadRequestException('id must be send')
        }
        const user: User = await this._userRepository.findOne(id,
            {where:{status: 'ACTIVE'}});
        if(!user){
            throw new NotFoundException();
        }
        return user
    }
    async getAll():Promise<User[]>{

        const users: User[] = await this._userRepository.find(
            {where:{status: 'ACTIVE'}});
        if(!users){
            throw new NotFoundException();
        }
        return users;
    }
    async create(user: User):Promise<User>{
        const savedUser = await this._userRepository.save(user);
        return savedUser;
    }
    async update(id: number, user: User): Promise<void>{
        await this._userRepository.update(id, user);
    }
    async delete(id: number): Promise<void>{
        const userExist = await this._userRepository.findOne(id,{
            where:{status: 'ACTIVE'}});
        if(!userExist){
            throw new NotFoundException()
        }
        await this._userRepository.update(id,{status:'INACTIVE'})
    }

}
