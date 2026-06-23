"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.healthController = void 0;
const health_service_1 = require("../services/health.service");
const healthController = (_request, response) => {
    response.json((0, health_service_1.getHealthStatus)());
};
exports.healthController = healthController;
