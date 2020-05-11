import { RoleType } from '../role/role-type.enum';

export interface IJwtPayload {
    id: number;
    username: string;
    email:string;
    role:RoleType[];
    iat?: Date;
}
