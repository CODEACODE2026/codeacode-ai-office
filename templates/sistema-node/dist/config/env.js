"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.env = void 0;
const dotenv_1 = __importDefault(require("dotenv"));
dotenv_1.default.config();
const parseNumber = (value, fallback) => {
    if (!value) {
        return fallback;
    }
    const parsedValue = Number(value);
    return Number.isNaN(parsedValue) ? fallback : parsedValue;
};
exports.env = {
    nodeEnv: process.env.NODE_ENV ?? 'development',
    port: parseNumber(process.env.PORT, 3000),
    database: {
        host: process.env.DB_HOST ?? 'localhost',
        port: parseNumber(process.env.DB_PORT, 3306),
        user: process.env.DB_USER ?? 'root',
        password: process.env.DB_PASSWORD ?? '',
        name: process.env.DB_NAME ?? 'sistema_node',
        connectionLimit: parseNumber(process.env.DB_CONNECTION_LIMIT, 10),
    },
};
