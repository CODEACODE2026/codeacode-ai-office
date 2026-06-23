"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.checkDatabaseConnection = exports.pool = void 0;
const promise_1 = __importDefault(require("mysql2/promise"));
const env_1 = require("../config/env");
exports.pool = promise_1.default.createPool({
    host: env_1.env.database.host,
    port: env_1.env.database.port,
    user: env_1.env.database.user,
    password: env_1.env.database.password,
    database: env_1.env.database.name,
    waitForConnections: true,
    connectionLimit: env_1.env.database.connectionLimit,
});
const checkDatabaseConnection = async () => {
    const connection = await exports.pool.getConnection();
    try {
        await connection.ping();
        return true;
    }
    finally {
        connection.release();
    }
};
exports.checkDatabaseConnection = checkDatabaseConnection;
