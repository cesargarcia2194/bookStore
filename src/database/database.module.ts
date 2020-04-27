import { Module } from '@nestjs/common';
import { databaseProviders } from './database.service';

import { MongooseModule } from '@nestjs/mongoose';

@Module({
    imports: [...databaseProviders],
    exports: []
})
export class DatabaseModule { }
