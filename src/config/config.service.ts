import * as fs from 'fs';
import * as path from 'path';
import { parse } from 'dotenv';
export class ConfigService {
    private readonly envConfig: { [key: string]: string }

    constructor() {
        const isDevelopmentEnv = process.env.NODE_ENV !== 'production';

        if (isDevelopmentEnv) {
            const envFilePath = path.join(__dirname, '../../.env')
            const existPath = fs.existsSync(envFilePath);
            console.log(envFilePath)
            if (!existPath) {
                console.log('.env file does not exist');
                process.exit(0);
            }
            this.envConfig = parse(fs.readFileSync(envFilePath))
        } else {
            this.envConfig = {
                PORT: process.env.PORT
            }
        }
    }
    get(key: string): string {
        return this.envConfig[key]
    }
}