USE [master]
GO

/****** Object:  Database [mcq]    Script Date: 03/18/2013 18:47:53 ******/
CREATE DATABASE [mcq] ON  PRIMARY 
( NAME = N'mcq', FILENAME = N'c:\Program Files\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\MSSQL\DATA\mcq.mdf' , SIZE = 2240KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'mcq_log', FILENAME = N'c:\Program Files\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\MSSQL\DATA\mcq_1.LDF' , SIZE = 1024KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO

ALTER DATABASE [mcq] SET COMPATIBILITY_LEVEL = 90
GO

IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [mcq].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO

ALTER DATABASE [mcq] SET ANSI_NULL_DEFAULT OFF 
GO

ALTER DATABASE [mcq] SET ANSI_NULLS OFF 
GO

ALTER DATABASE [mcq] SET ANSI_PADDING OFF 
GO

ALTER DATABASE [mcq] SET ANSI_WARNINGS OFF 
GO

ALTER DATABASE [mcq] SET ARITHABORT OFF 
GO

ALTER DATABASE [mcq] SET AUTO_CLOSE ON 
GO

ALTER DATABASE [mcq] SET AUTO_CREATE_STATISTICS ON 
GO

ALTER DATABASE [mcq] SET AUTO_SHRINK OFF 
GO

ALTER DATABASE [mcq] SET AUTO_UPDATE_STATISTICS ON 
GO

ALTER DATABASE [mcq] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO

ALTER DATABASE [mcq] SET CURSOR_DEFAULT  GLOBAL 
GO

ALTER DATABASE [mcq] SET CONCAT_NULL_YIELDS_NULL OFF 
GO

ALTER DATABASE [mcq] SET NUMERIC_ROUNDABORT OFF 
GO

ALTER DATABASE [mcq] SET QUOTED_IDENTIFIER OFF 
GO

ALTER DATABASE [mcq] SET RECURSIVE_TRIGGERS OFF 
GO

ALTER DATABASE [mcq] SET  DISABLE_BROKER 
GO

ALTER DATABASE [mcq] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO

ALTER DATABASE [mcq] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO

ALTER DATABASE [mcq] SET TRUSTWORTHY OFF 
GO

ALTER DATABASE [mcq] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO

ALTER DATABASE [mcq] SET PARAMETERIZATION SIMPLE 
GO

ALTER DATABASE [mcq] SET READ_COMMITTED_SNAPSHOT OFF 
GO

ALTER DATABASE [mcq] SET HONOR_BROKER_PRIORITY OFF 
GO

ALTER DATABASE [mcq] SET  READ_WRITE 
GO

ALTER DATABASE [mcq] SET RECOVERY SIMPLE 
GO

ALTER DATABASE [mcq] SET  MULTI_USER 
GO

ALTER DATABASE [mcq] SET PAGE_VERIFY CHECKSUM  
GO

ALTER DATABASE [mcq] SET DB_CHAINING OFF 
GO
