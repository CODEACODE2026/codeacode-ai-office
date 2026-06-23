import mysql from 'mysql2/promise';

import { env } from '../config/env';

export const pool = mysql.createPool({
  host: env.database.host,
  port: env.database.port,
  user: env.database.user,
  password: env.database.password,
  database: env.database.name,
  waitForConnections: true,
  connectionLimit: env.database.connectionLimit,
});

export const checkDatabaseConnection = async (): Promise<boolean> => {
  const connection = await pool.getConnection();

  try {
    await connection.ping();
    return true;
  } finally {
    connection.release();
  }
};
