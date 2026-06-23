import dotenv from 'dotenv';

dotenv.config();

const parseNumber = (value: string | undefined, fallback: number): number => {
  if (!value) {
    return fallback;
  }

  const parsedValue = Number(value);

  return Number.isNaN(parsedValue) ? fallback : parsedValue;
};

export const env = {
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
