import { Body, Controller, Delete, Get, Param, ParseIntPipe, Patch, Post, Put, UseGuards } from '@nestjs/common';
import { UserService } from './user.service';
import { UserDTO } from './dto/user.dto';
import { User } from './user.entity';
import { UserDetails } from './user-details.entity';
import { getConnection } from 'typeorm';
import { Role } from '../role/role.entity';
import { AuthGuard } from '@nestjs/passport';


@Controller('users')
export class UserController {

    constructor(private readonly _userService: UserService) { }

    @Get(':id')
    async  getUser(@Param('id', ParseIntPipe) id: number): Promise<User> {
        const user: User =  await this._userService.get(id);
        return  user;
    }
    @UseGuards(AuthGuard())
    @Get()
    async getUsers(): Promise<User[]> {
        const users: User[]= await this._userService.getAll();
        return users;
    }
    @Post()
    async creteUser(@Body() user: User): Promise<User>{
        const detail = new UserDetails();
        user.detail = detail;
        const repo = await getConnection().getRepository(Role);
        const defaultRole = await repo.findOne({
            where:{name: 'GENERAL'}
        });
        user.roles = [defaultRole];

        const userCreated = await this._userService.create(user);
        return userCreated;
    }
    @Patch(':id')
    async updateUser(@Param('id', ParseIntPipe) id: number, @Body() user: User): Promise<void>{
        await this._userService.update(id, user);
    }
    @Delete(':id')
    async deleteUser(@Param('id', ParseIntPipe) id: number): Promise<void>{
        await this._userService.delete(id);
    }
    @Post('/setRole/:userId/:roleId')
    async setRoleToUser(@Param('userId', ParseIntPipe) userId: number,
                        @Param('roleId', ParseIntPipe) roleId: number){
        this._userService.setRoleToUser(userId, roleId);

    }

}
