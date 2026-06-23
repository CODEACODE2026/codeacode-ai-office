"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.app = void 0;
const express_1 = __importDefault(require("express"));
const env_1 = require("./config/env");
const error_middleware_1 = require("./middlewares/error.middleware");
const health_routes_1 = require("./routes/health.routes");
exports.app = (0, express_1.default)();
exports.app.use(express_1.default.json());
exports.app.get('/', (_request, response) => {
    response.json({
        name: 'sistema-node',
        environment: env_1.env.nodeEnv,
        health: '/health',
    });
});
exports.app.use('/health', health_routes_1.healthRoutes);
exports.app.use(error_middleware_1.errorMiddleware);
