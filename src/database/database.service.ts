import { ConfigModule } from '../config/config.module';
import { ConfigService } from '../config/config.service';
import { TypeOrmModule } from '@nestjs/typeorm';
import { ConnectionOptions } from 'typeorm';
import { Configuration } from 'src/config/confg.keys';
import * as path from 'path';
export const databaseProviders = [
    TypeOrmModule.forRootAsync({
        imports: [ConfigModule],
        inject: [ConfigService],
        async useFactory(config: ConfigService) {

            return {
                ssl: false,
                type: 'postgres',
                host: config.get(Configuration.HOST),
                username: config.get(Configuration.USERNAME),
                password: config.get(Configuration.PASSWORD),
                port: parseInt(config.get(Configuration.PORT_DB)),
                entities: [path.join(__dirname, '../**/*.entity{.ts,.js}')],
                //migrations: [path.join(__dirname, '/migrations/*{.ts,.js}')]
                synchronize: false,
            } as ConnectionOptions
        }
    })
];















