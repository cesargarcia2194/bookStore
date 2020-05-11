import { EntityRepository, getConnection, Repository } from 'typeorm';
import { User } from '../user/user.entity';
import { SignupDto } from './dto';
import { RoleRepository } from '../role/role.repository';
import { RoleType } from '../role/role-type.enum';
import { Role } from '../role/role.entity';
import { UserDetails } from '../user/user-details.entity';
import { genSalt, hash } from 'bcryptjs';

@EntityRepository(User)
export class AuthRepository extends Repository<User>{

    async signup(signup: SignupDto) {
        const {username, email , password } = signup;
        const user = new User();
        user.username = username;
        user.email = email;

        const _roleRepository = await getConnection().getRepository(Role);
        const roleDefault: Role = await _roleRepository.findOne(
            {where: {name: RoleType.GENERAL}});
        user.roles = [roleDefault];

        const userDetail = new UserDetails();
        user.detail = userDetail;

        const salt = await genSalt(10);
        user.password = await hash(password, salt);
        await user.save();
    }

}
