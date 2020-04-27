import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { UserRepositry } from './user.repository';
import { UserService } from './user.service';
import { UserController } from './user.controller';

//TypeOrmModule.forFeature([UserRepositry])
@Module({
    imports: [],
    providers: [UserService],
    controllers: [UserController]
})
export class UserModule { }
