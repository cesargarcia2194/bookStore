import { Document } from 'mongoose';
export interface User extends Document {
    id?: string;
    name: string;
    lastname: string;
    email: string;
    password: string;
    role: string;
    image: string
    limitStorage: string;
}