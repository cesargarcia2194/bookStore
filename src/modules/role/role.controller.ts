import { Body, Controller, Delete, Get, Param, ParseIntPipe, Patch, Post, Put } from '@nestjs/common';
import { RoleService } from './role.service';
import { Role } from './role.entity';
import { getConnection } from 'typeorm';



@Controller('roles')
export class RoleController {

    constructor(private readonly _roleService: RoleService) { }

    @Get(':id')
    async  getRole(@Param('id', ParseIntPipe) id: number): Promise<Role> {
        const role: Role =  await this._roleService.get(id);
        return  role;
    }
    @Get()
    async getRoles(): Promise<Role[]> {
        const roles: Role[]= await this._roleService.getAll();
        return roles;
    }
    @Post()
    async creteRole(@Body() role: Role): Promise<Role>{
        const roleCreated = await this._roleService.create(role);
        return roleCreated;
    }
    @Patch(':id')
    async updateRole(@Param('id', ParseIntPipe) id: number, @Body() role: Role){
       return await this._roleService.update(id, role);
    }
    @Delete(':id')
    async deleteRole(@Param('id', ParseIntPipe) id: number): Promise<void>{
        await this._roleService.delete(id);
    }

}
