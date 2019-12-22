===================================================
create database mcq
use mcq
update  reg_master set delet=1
select sid,sname,email,address,city,state,mobile,qualification,subject,r_date,a_status from reg_master where delet=1
===================================================
create table reg_master
(sid int primary key identity(1,1),
sname varchar(40),
email varchar(35),
password varchar(16),
address varchar(100),
city varchar(20),
state varchar(20),
mobile varchar(10),
qualification varchar(10),
subject int,
a_status bit,
admin_status bit,
r_date datetime,
up_date datetime)
 
==========================================================
sp_insert_reg_master
==========================================================
alter procedure sp_insert_reg_master
	@sname varchar(40),
	@email varchar(35),
	@password varchar(16),
	@address varchar(100),
	@city varchar(20),
	@state varchar(20),
	@mobile varchar(10),
	@qualification varchar(10),
	@subject int
as 
begin
	insert into reg_master(sname,email,password,address,city,state,mobile,qualification,subject,a_status,admin_status,r_date)
	values(@sname,@email,@password,@address,@city,@state,@mobile,@qualification,@subject,'true','false',getdate())
end

select * from reg_master
select count(email) as 'res' from reg_master where delet=1 and email='kishanpatel@gmail.com'

select max(lid) from login_detail
create procedure sp_update_reg_master
	@address varchar(100),
	@city varchar(20),
	@state varchar(20),
	@mobile varchar(10),
	@qualification varchar(10),
	@sid int
as 
begin
	update reg_master set address=@address ,city=@city ,state=@state ,mobile=@mobile ,qualification=@qualification,up_date=getdate() where sid=@sid
end

===========================================================
exec sp_insert_reg_master 'praful bhuva','prafulbhuva04@gmail.com','12345','rajkot','rajkot','gujrat','9726666983','BCA',1
===========================================================
delete from reg_master
select * from reg_master where a_status=1 
update reg_master set a_status =1
===========================================================
alter procedure sp_insert_reg_master
	@sname varchar(40),
	@email varchar(35),
	@password varchar(16),
	@address varchar(100),
	@city varchar(20),
	@state varchar(20),
	@mobile varchar(10),
	@qualification varchar(10),
	@subject int,
	
as 
begin
	 select count(sid) from reg_master where email=@email 
	
	insert into reg_master(sname,email,password,address,city,state,mobile,qualification,subject,a_status,admin_status,r_date)
	values(@sname,@email,@password,@address,@city,@state,@mobile,@qualification,@subject,'true','false',getdate())
end


===============================================================
======================================================
===============================================================
	

create table subject_master
(subid int primary key identity(1,1),
subname varchar(40),
sub_status bit,
a_status bit,
s_date datetime,
up_date datetime)

======================================================================
insert into subject_master
values('C','true','true',getdate(),getdate())
insert into subject_master
values('C++','true','true',getdate(),getdate())
insert into subject_master
values('JAVA','true','true',getdate(),getdate())
insert into subject_master
values('HTML','true','true',getdate(),getdate())
insert into subject_master
values('ASP.Net','true','true',getdate(),getdate())
insert into subject_master
values('PHP','true','true',getdate(),getdate())
insert into subject_master
values('SQL Server','true','true',getdate(),getdate())
insert into subject_master
values('ASP.Net','true','true',getdate(),getdate())
============================================================================
select count(subid) from subject_master  where subname='PHP'
select subid,subname from subject_master
delete from subject_master where subname='daa'
select count(subid) as 'res' from subject_master where subname='hkh'
============================================================================
update subject_master set a_status='true' where subid=2
=============================================================================
=================================================
===========================================================
 create procedure sp_insert_subject_master
	@subname varchar(40),
	@sub_status bit
as
begin
	insert into subject_master (subname,sub_status,a_status,s_date)
	values(@subname,@sub_status,1,getdate())
end

create table question_master
(qid int primary key identity(1,1),
qname varchar(500),
A varchar(100),
B varchar(100),
C varchar(100),
D varchar(100),
ans varchar(1),
subid int foreign key references subject_master(subid),
q_status bit,
a_status bit,
q_date datetime,
up_date datetime)
===========================================================
sp_insert_question_master
===========================================================
alter procedure sp_insert_question_master
	@qname varchar(500),
	@A varchar(100),
	@B varchar(100),
	@C varchar(100),
	@D varchar(100),
	@ans varchar(1),
	@subid int
as
begin
	insert into question_master(qname,A,B,C,D,ans,subid,q_status,a_status,q_date)
	values(@qname,@A,@B,@C,@D,@ans,@subid,'true','true',getdate())
end
==============================================================
exec sp_insert_question_master 'whor u?','praful','rajesh','mukesh','mahesh','A',1
==============================================================
create procedure sp_insert_question_master
	@qid int,	
	@qname varchar(500),
	@A varchar(100),
	@B varchar(100),
	@C varchar(100),
	@D varchar(100),
	@ans varchar(1),
	@subid int
as
begin
	update question_master set qname=@qname,A=@A,B=@B,C=@C,D=@D,ans=@ans,subid=@subid,up_date=getdate() where=@qid
	
end


select * from question_master
select qid,qname,A,B,C,D,ans,q_status from question_master

===========================================================
==============================
===========================================================
create table login_detail
(lid int primary key identity(1,1),
sid int foreign key references reg_master(sid),
a_status bit,
in_date datetime,
out_date datetime)
===========================================================

create procedure sp_insert_login_detail
	@sid int
as
begin
	insert into login_detail (sid,a_status,in_date) 
	values(@sid,'true',getdate())
end
==========================================================
select * from login_detail
==========================================================
create procedure sp_update_login_detail
	@sid int
as
begin
	update login_detail set  out_date=getdate()
end
==========================================================
select reg_master.sname,login_detail.in_date,login_detail.out_date from login_detail inner join reg_master on login_detail.sid=reg_master.sid
=======================================
=========================================================


create table feedback_master
(fid int primary key identity(1,1),
sname varchar(15),
email varchar(40),
comment varchar(100),
a_status bit,
f_date datetime,
up_date datetime)

===========================================================
create procedure sp_insert_feedback_master
	@sname varchar(15),
	@email varchar(40),
	@comment varchar(100)
as
begin
	insert into feedback_master(sname,email,comment,a_status,f_date)
	values(@sname,@email,@comment,'true',getdate())
end
===============================================================
exec sp_insert_feedback_master 'praful','bhuvapraful04@gmail.com','thanks'
===============================================================
select * from feedback_master
==============================================================
=========================================
===================================================================


create table exam_master
(eid int primary key identity(1,1),
subid int foreign key references subject_master(subid),
t_n_q int,
p_q_m numeric(4,2),
n_m numeric(4,2),
etime datetime, 
a_status bit,
e_date datetime,
up_date datetime)

===========================================================

create procedure sp_insert_exam_master
	@subid int,
	@t_n_q int,
	@p_q_m numeric(4,2),
	@n_m numeric(4,2),
	@etime datetime
as
begin
	insert into exam_master(subid,t_n_q,p_q_m,n_m,etime,a_status,e_date)
	values(@subid,@t_n_q,@p_q_m,@n_m,@etime,'true',getdate())
end
=============================================================
exec sp_insert_exam_master
================================================================
select eid from exam_master where subid=


select e.eid,e.t_n_q,e.p_q_m,e.n_m,e.etime,s.subname from exam_master e inner join subject_master s on s.subid=e.subid

create  procedure [dbo].[sp_update_exam_master]	
	@eid int,
	@subid int,
	@t_n_q int,
	@p_q_m numeric(4,2),
	@n_m numeric(4,2),
	@etime int,
	@a_status bit
as
begin
	update exam_master set subid=@subid,t_n_q=@t_n_q,p_q_m = @p_q_m,n_m = @n_m,etime = @etime,a_status = @a_status, up_date=getdate() where eid=@eid

end


create table result_master
(rid int primary key identity(1,1),
sid int foreign key references reg_master(sid),
subid int foreign key references subject_master(subid),
total numeric(4,2),
n_m numeric(4,2),
etime datetime, 
a_status bit,
e_date datetime,
up_date datetime)

alter procedure sp_intert_result_master

@sid int,
@subid int,
@total numeric(4,2),
@n_m numeric(4,2),
@etime numeric, 
@stime datetime,
@endtime datetime,
@omark  numeric
as
begin
	insert into result_master (sid,subid,total,n_m,etime,stime,endtime,e_date,omark)
						values(@sid,@subid,@total,@n_m,@etime,@stime,@endtime,getdate(),@omark)
end


===================================================



update reg_master set address= ,city= ,state= ,mobile= ,qualification= where sid=






=======================================
DELETE SP
=======================================
use mcq
alter Procedure sp_Reg_Master_Delete
@sid int
as
begin

UPDATE [mcq].[dbo].[reg_master]
   SET delet = 0
      ,[up_date] =getdate()
 WHERE sid=@sid
end

exec sp_Reg_Master_Delete '15'

update subject_master set delet=1

create Procedure sp_Subject_Master_Delete
@subid int
as
begin

UPDATE [mcq].[dbo].[subject_master]
   SET delet = 0
      ,[up_date] =getdate()
 WHERE subid=@subid
end

exec sp_Subject_Master_Delete '10'


create Procedure sp_login_detail_Delete
@lid int
as
begin

UPDATE [mcq].[dbo].[login_detail]
   SET delet = 0
      ,[up_date] =getdate()
 WHERE lid=@lid
end
update  login_detail set delet=1


create Procedure sp_feedback_Master_Delete
@fid int
as
begin

UPDATE [mcq].[dbo].[feedback_master]
   SET delet = 0
      ,[up_date] =getdate()
 WHERE fid=@fid
end

update  feedback_master set delet=1

create Procedure sp_exam_Master_Delete
@eid int
as
begin

UPDATE [mcq].[dbo].[exam_master]
   SET delet = 0
      ,[up_date] =getdate()
 WHERE eid=@eid
end
update  exam_master set delet=1

create Procedure sp_result_Master_Delete
@rid int
as
begin

UPDATE [mcq].[dbo].[result_master]
   SET delet = 0
      ,[up_date] =getdate()
 WHERE rid=@rid
end






create table temp_question
(tid int identity,
subid int,
sid int,
qid int,
ans varchar(1))


create procedure sp_insert_temp_question
@subid int,
@sid int,
@qid int,
@ans varchar(1)

as
begin
	insert into temp_question values(@subid,@sid,@qid,@ans)

end


create procedure sp_update_temp_question
@subid int,
@sid int,
@qid int,
@ans varchar(1)

as
begin
	update temp_question set subid= @subid,qid=@qid,ans=@ans where sid=@sid and qid=@qid

end

create procedure sp_delete_temp_question

@sid int

as
begin
	delete from temp_question  where sid= @sid

end

select * from temp_question
select * from question_master 
select * from reg_master 


select q.qname,q.a,q.b,q.c,q.d,q.ans,t.ans from temp_question t 
		left outer join question_master q on q.qid=t.qid
		left outer join reg_master r on t.sid=r.sid

select count(t.ans) from temp_question t left outer join question_master q on q.qid=t.qid left outer join reg_master r on t.sid=r.sid where  q.ans=t.ans and r.sid=10





