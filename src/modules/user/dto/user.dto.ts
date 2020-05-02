import { IsNotEmpty } from 'class-validator';
import { RoleType } from '../../role/role-type.enum';
import { UserDetails } from '../user-details.entity';
export class UserDTO {
    @IsNotEmpty()
    id: number;

    @IsNotEmpty()
    username: string;

    @IsNotEmpty()
    email: string;

    @IsNotEmpty()
    roles: RoleType[];

    @IsNotEmpty()
    detail: UserDetails;

}
