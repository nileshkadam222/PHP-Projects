if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_GetUserProfile]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_GetUserProfile]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_InsertHODUpdates]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_InsertHODUpdates]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_InsertSuggestion]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_InsertSuggestion]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_Leave_request]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_Leave_request]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_ValidateUser]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_ValidateUser]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_getUpdates]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_getUpdates]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_sendcirculars]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_sendcirculars]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_staff_UpdateUserdetails]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_staff_UpdateUserdetails]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_staff_registrationdetails]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_staff_registrationdetails]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[sp_viewleaverequest]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[sp_viewleaverequest]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Attendance]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Attendance]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[CircularTypes]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[CircularTypes]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Circulars]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Circulars]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Department]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Department]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Event_suggestions]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Event_suggestions]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Events]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Events]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Eventtypes]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Eventtypes]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[LeaveDetails]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[LeaveDetails]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Specialfeature]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Specialfeature]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Timetable]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Timetable]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[UpdateDetails]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[UpdateDetails]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[UserDetails]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[UserDetails]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Usertypes]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Usertypes]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Year]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[Year]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[specialfeaturetype]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[specialfeaturetype]
GO

CREATE TABLE [dbo].[Attendance] (
	[AllId] [int] IDENTITY (1, 1) NOT NULL ,
	[UserId] [int] NULL ,
	[TotalDays] [int] NULL ,
	[Leavesapplied] [int] NULL ,
	[daysattendance] [int] NULL ,
	[Availableleaves] [int] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[CircularTypes] (
	[CircularTypeId] [int] NOT NULL ,
	[circularType] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Circulars] (
	[CircularId] [int] IDENTITY (1, 1) NOT NULL ,
	[CircularTypeId] [int] NULL ,
	[Date] [datetime] NULL ,
	[Timings] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Place] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Duration] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[CircularDescription] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Department] (
	[DeptId] [int] NULL ,
	[DeptName] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Event_suggestions] (
	[EvsegId] [int] IDENTITY (1, 1) NOT NULL ,
	[EventId] [int] NULL ,
	[UserId] [int] NULL ,
	[Suggestion] [varchar] (300) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Events] (
	[EventId] [int] IDENTITY (1, 1) NOT NULL ,
	[EventtypeId] [int] NULL ,
	[EventName] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[EventDate] [datetime] NULL ,
	[Timings] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Place] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Description] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[EventOrganizer] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Eventtypes] (
	[EventtypeId] [int] NOT NULL ,
	[Eventtype] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[LeaveDetails] (
	[LeaveId] [int] IDENTITY (1, 1) NOT NULL ,
	[reason] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Description] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Appliedby] [int] NULL ,
	[No_of_Leaves] [int] NULL ,
	[Acc_reg] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Fromdate] [datetime] NULL ,
	[ToDate] [datetime] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Specialfeature] (
	[featureId] [int] IDENTITY (1, 1) NOT NULL ,
	[featuretypeId] [int] NULL ,
	[featurename] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[featureDescription] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[IsActive] [bit] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Timetable] (
	[TimeId] [int] NOT NULL ,
	[Year_semId] [int] NULL ,
	[DeptId] [int] NULL ,
	[Filepath] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[UpdateDetails] (
	[UpdateId] [int] IDENTITY (1, 1) NOT NULL ,
	[UpdateName] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[UpdateDescription] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[UserId] [int] NULL ,
	[UpdateDate] [datetime] NULL ,
	[IsActive] [bit] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[UserDetails] (
	[UserId] [int] IDENTITY (1, 1) NOT NULL ,
	[Username] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Password] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Firstname] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[Lastname] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[DOB] [datetime] NULL ,
	[Address] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[EmailId] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[MobileNo] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[UsertypeId] [int] NULL ,
	[DeptId] [int] NULL ,
	[Isactive] [bit] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Usertypes] (
	[UsertypeId] [int] NOT NULL ,
	[Usertype] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Year] (
	[Year_semId] [int] NOT NULL ,
	[Year_sem] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[specialfeaturetype] (
	[FeaturetypeId] [int] IDENTITY (1, 1) NOT NULL ,
	[Featuretype] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS OFF 
GO

CREATE PROCEDURE sp_GetUserProfile
(
@username varchar(50)
)
AS
begin


SELECT      UserDetails.UserId, UserDetails.Username, UserDetails.Password, UserDetails.Firstname, UserDetails.Lastname, UserDetails.DOB, UserDetails.Address, 
                      UserDetails.EmailId, UserDetails.MobileNo, Usertypes.Usertype, Department.DeptName
FROM         UserDetails INNER JOIN
                      Usertypes ON UserDetails.UsertypeId = Usertypes.UsertypeId INNER JOIN
                      Department ON UserDetails.DeptId = Department.DeptId
WHERE     (UserDetails.Username = @username)

end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS OFF 
GO

CREATE PROCEDURE sp_InsertHODUpdates
(
@updatename varchar(50),
@UpdateDescription varchar(100),
@date datetime,
@username varchar(50)
)
 AS
begin
declare @userid int

select @userid=userid from userdetails where username=@username

insert into UpdateDetails values(@updatename,@UpdateDescription,@userid,@date,0)
end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS OFF 
GO

CREATE PROCEDURE sp_InsertSuggestion
(
@eventid int,
@username varchar(50),
@sugesstion varchar(300)
)
 AS
begin

declare @userid int

select @userid=userid from userdetails where username=@username

insert into Event_suggestions values(@userid,@eventid,@sugesstion)



end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE procedure sp_Leave_request
(
@reason varchar(50),
@Description varchar(50),
@appliedby varchar(50),
@FromDate datetime,
@ToDate datetime,
@No_of_Leaves int,
@ErrMsg varchar(50) output
)
as
begin
declare @uid int

select @uid=userid from userdetails where username=@appliedby

insert into LeaveDetails(reason,Description,appliedby,FromDate,ToDate,No_of_leaves,acc_reg)values(@reason,@Description,@uid,@Fromdate,@ToDate,@No_of_Leaves,0)
set @ErrMsg='yes'
end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS OFF 
GO

CREATE PROCEDURE sp_ValidateUser
(
@username varchar(50),
@password varchar(50),
@usertype int,
@errmsg varchar(50) output
)
AS
begin
if exists(select * from userdetails where username=@username and password=@password and UsertypeId=@usertype)
begin
set @errmsg='yes'
end
else
begin
set @errmsg='no'
end
end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS OFF 
GO

CREATE PROCEDURE sp_getUpdates
(
@username varchar(50)
)

 AS

declare @deptid int
select @deptid=deptid from userdetails where username=@username


SELECT     UserDetails.DeptId, UpdateDetails.UpdateName, UpdateDetails.UpdateDescription, UserDetails.Username, UserDetails.Firstname, 
                      UserDetails.MobileNo, UserDetails.EmailId
FROM         UpdateDetails INNER JOIN
                      UserDetails ON UpdateDetails.UserId = UserDetails.UserId INNER JOIN
                      Department ON UserDetails.DeptId = Department.DeptId
WHERE     (Department.DeptId = @deptid)
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE procedure sp_sendcirculars
(
@circulartypeid int,
@CircularDescription varchar(50),
@Date datetime,
@Timings varchar(50),
@Place varchar(50),
@Duration varchar(50)

)
as
begin

insert into circulars(circularTypeid,CircularDescription,Date,
Timings,Place,Duration)values(@circulartypeid,@CircularDescription,@Date,@Timings,@Place,@Duration)
end

GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS OFF 
GO

CREATE procedure sp_staff_UpdateUserdetails
(
@Username varchar(50),
@password varchar(50),
@FirstName varchar(50),
@LastName varchar(50),
@DateOfBirth datetime,
@Address Varchar(50),
@Emailid varchar(50),
@ContactNumber varchar(50),
@Designation int,
@Department int,
@ErrMsg varchar(50) output
)
as
begin




update UserDetails set password=@password,FirstName=@FirstName,lastname=@LastName,DOB=@DateOfBirth,Address=@Address,Emailid=@Emailid,MobileNo=@ContactNumber,UsertypeId=@Designation,DeptId=@Department where username=@Username
set @ErrMsg='yes'

end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE procedure sp_staff_registrationdetails
(
@Username varchar(50),
@password varchar(50),
@FirstName varchar(50),
@LastName varchar(50),
@DateOfBirth datetime,
@Address Varchar(50),
@Emailid varchar(50),
@ContactNumber varchar(50),
@Designation int,
@Department int,
@ErrMsg varchar(50) output
)
as
begin

if exists(select * from UserDetails  where UserName=@UserName and Password=@Password)
begin

set @ErrMsg='no'
end

else
begin

set @ErrMsg='yes'
insert into UserDetails(Username,password,FirstName,lastname,DOB,Address,Emailid,MobileNo,UsertypeId,DeptId)
values(@Username,@password,@FirstName,@LastName ,@DateOfBirth,@Address ,@Emailid ,@ContactNumber,@Designation ,@Department)
end

end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS OFF 
GO

CREATE PROCEDURE sp_viewleaverequest
(
@username varchar(50)
)
AS
begin

declare @deptid int

select @deptid=deptid from userdetails where username=@username

SELECT     LeaveDetails.leaveid,UserDetails.username,UserDetails.Firstname, UserDetails.Lastname, LeaveDetails.No_of_Leaves, LeaveDetails.Fromdate, LeaveDetails.ToDate, 
                      LeaveDetails.Description
FROM         UserDetails INNER JOIN
                      LeaveDetails ON UserDetails.UserId = LeaveDetails.Appliedby
WHERE     (UserDetails.DeptId = @deptid) AND (LeaveDetails.Acc_reg = 0)

end
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

