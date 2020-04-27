import { Schema } from 'mongoose';
export const UserSchema = new Schema(
    {
        name: { type: String, require: true },
        lastname: { type: String },
        email: { type: String, require: true },
        password: { type: String, require: true },
        role: { type: String, require: true },
        image: { type: String },
        limitStorage: { type: Number }
    }
)