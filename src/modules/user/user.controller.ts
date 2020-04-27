import { Controller, Get } from '@nestjs/common';
import { UserService } from './user.service';
import { UserDTO } from './dto/user.dto';
import { User } from './interface/user.interface';

@Controller('user')
export class UserController {

    constructor(private readonly _userService: UserService) { }

    @Get()
    getUsers(): string {
        return 'Hello word'
    }
}
