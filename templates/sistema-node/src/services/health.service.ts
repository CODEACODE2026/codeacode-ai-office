import { env } from '../config/env';

type HealthStatus = {
  status: 'ok';
  environment: string;
  uptime: number;
  timestamp: string;
};

export const getHealthStatus = (): HealthStatus => {
  return {
    status: 'ok',
    environment: env.nodeEnv,
    uptime: process.uptime(),
    timestamp: new Date().toISOString(),
  };
};
