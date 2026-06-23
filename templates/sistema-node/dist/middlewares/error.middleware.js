"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.errorMiddleware = void 0;
const errorMiddleware = (error, _request, response, _next) => {
    console.error(error);
    response.status(500).json({
        message: 'Erro interno do servidor.',
    });
};
exports.errorMiddleware = errorMiddleware;
