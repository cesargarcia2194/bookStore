import { Body, Controller, Post, UsePipes, ValidationPipe } from '@nestjs/common';
import { SigninDto, SignupDto } from './dto';
import { AuthService } from './auth.service';

@Controller('auth')
export class AuthController {

    constructor(
        private readonly _authService: AuthService
    ){}

    @Post('signup')
    @UsePipes(ValidationPipe)
    async signup(@Body() signup: SignupDto){
        return this._authService.signUp(signup)
    }
    @Post('signin')
    @UsePipes(ValidationPipe)
    async signin(@Body() signin: SigninDto){
        return this._authService.signin(signin)
    }
}
