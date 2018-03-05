DROP DATABASE IF EXISTS db_reports;
CREATE DATABASE db_reports;
USE db_reports;
CREATE TABLE tbl_reports(
	nname varchar(255),
	msg varchar(1024),
	ts timestamp
);
