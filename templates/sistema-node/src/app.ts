import express from 'express';

import { env } from './config/env';
import { errorMiddleware } from './middlewares/error.middleware';
import { healthRoutes } from './routes/health.routes';

export const app = express();

app.use(express.json());

app.get('/', (_request, response) => {
  response.json({
    name: 'sistema-node',
    environment: env.nodeEnv,
    health: '/health',
  });
});

app.use('/health', healthRoutes);

app.use(errorMiddleware);
