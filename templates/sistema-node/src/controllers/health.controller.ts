import type { Request, Response } from 'express';

import { getHealthStatus } from '../services/health.service';

export const healthController = (_request: Request, response: Response): void => {
  response.json(getHealthStatus());
};
