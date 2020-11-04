/*
 
 Source Server         : mssql
 Source Server Type    : SQL Server
 Source Catalog        : movedb
 Source Schema         : dbo

  Date: 30/10/2020
*/

-- ----------------------------
-- Create database
-- ----------------------------

IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = 'movedb')
BEGIN
  CREATE DATABASE movedb;
END;
GO

USE movedb;
GO


IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[allocationhistory]') AND type IN ('U'))
	DROP TABLE [dbo].[allocationhistory]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[allocationparam]') AND type IN ('U'))
	DROP TABLE [dbo].[allocationparam]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[loginhistory]') AND type IN ('U'))
	DROP TABLE [dbo].[loginhistory]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[asuser]') AND type IN ('U'))
	DROP TABLE [dbo].[asuser]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[job]') AND type IN ('U'))
	DROP TABLE [dbo].[job]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[clientmtn]') AND type IN ('U'))
	DROP TABLE [dbo].[clientmtn]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[listacmgr]') AND type IN ('U'))
	DROP TABLE [dbo].[listacmgr]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[liststafflist]') AND type IN ('U'))
	DROP TABLE [dbo].[liststafflist]
GO
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[sysparam]') AND type IN ('U'))
	DROP TABLE [dbo].[sysparam]
GO




CREATE TABLE [dbo].[liststafflist] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [StaffCode] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [StaffName] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  UNIQUE (StaffCode)
)
GO
ALTER TABLE [dbo].[liststafflist] SET (LOCK_ESCALATION = TABLE)
GO
INSERT INTO movedb.dbo.liststafflist (StaffCode,StaffName) VALUES ('BL','BL'),('CL','CL'),('GZ2','Jone'),('GZ3','Feng'),('GZ4','Naya'),('HK1','Ivan'),('HK2','Rita'),('HK3','Connie D'),('HK4','Alex'),('SC','SC'),('SZ1','Happy'),('SZ2','Stella'),('SZ3','Karen');
GO



CREATE TABLE [dbo].[listacmgr] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [AcMgr] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  UNIQUE (AcMgr)
)
GO
ALTER TABLE [dbo].[listacmgr] SET (LOCK_ESCALATION = TABLE)
GO
INSERT INTO movedb.dbo.listacmgr (AcMgr) VALUES ('-'),('AC1'),('KK'),('SC');
GO



CREATE TABLE [dbo].[allocationparam] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [FieldName] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [FieldValue] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  UNIQUE (FieldName)
)
GO
ALTER TABLE [dbo].[allocationparam] SET (LOCK_ESCALATION = TABLE)
GO
INSERT INTO [dbo].[allocationparam]  VALUES (N'SIBSOverallPct', N'30'),(N'SIBSS1SetPct', N'11'),(N'SIBSS2SetPct', N'9'),(N'SIBSS3SetPct', N'58'),(N'SIBSS4SetPct', N'14'),(N'SIBSS5SetPct', N'8'),(N'SIBSS1CSFtr', N'1'),(N'SIBSS2CSFtr', N'1'),(N'SIBSS3CSFtr', N'1'),(N'SIBSS4CSFtr', N'1');
GO



CREATE TABLE [dbo].[allocationhistory] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [FieldName] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [FieldValue] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ModifyDate] datetime NULL,
  constraint fk_FieldName FOREIGN KEY(FieldName) REFERENCES  [allocationparam](FieldName)
)
GO
ALTER TABLE [dbo].[allocationhistory] SET (LOCK_ESCALATION = TABLE)
GO



CREATE TABLE [dbo].[asuser] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [UserName] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [UserPW] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [UMenu] int NULL,
  [MMenu] int NULL,
  [QMenu] int NULL,
  [UClient] int NULL,
  [UJob] int NULL,
  [UJobProg] int NULL,
  [UAlloc] int NULL,
  [QClient] int NULL,
  [QJob] int NULL,
  [QJobProg] int NULL,
  [QAlloc] int NULL,
  [UJobProgSuperUser] int NULL,
  [UAllocSuperUser] int NULL,
  UNIQUE (UserName)
)
GO
ALTER TABLE [dbo].[asuser] SET (LOCK_ESCALATION = TABLE)
GO
INSERT INTO [dbo].[asuser] (UserName,UserPW,UMenu,MMenu,QMenu,UClient,UJob,UJobProg,UAlloc,QClient,QJob,QJobProg,QAlloc,UJobProgSuperUser,UAllocSuperUser) VALUES (N'KK', N'e10adc3949ba59abbe56e057f20f883e', N'1', N'1', N'1', N'1', N'1', N'1', N'1', N'1', N'1', N'1', N'1', N'1', N'1'),(N'admin', N'ae1e35fdea4f33a7bad49c85b6f5fdb2', N'1', N'1', N'1', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0'),(N'asstaff', N'00b7691d86d96aebd21dd9e138f90840', N'1', N'0', N'1', N'0', N'0', N'1', N'0', N'0', N'0', N'1', N'0', N'0', N'0'),(N'asexec', N'00b7691d86d96aebd21dd9e138f90840', N'1', N'0', N'1', N'0', N'0', N'1', N'0', N'0', N'0', N'1', N'0', N'1', N'0'),(N'Liza', N'ae1e35fdea4f33a7bad49c85b6f5fdb2', N'1', N'0', N'1', N'0', N'0', N'0', N'1', N'0', N'0', N'0', N'1', N'0', N'0')
GO



CREATE TABLE [dbo].[clientmtn] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [ClientCode1] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ClientCode2] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ClientCode3] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ClientName] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ClientLegalEntity] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ClientJurisdiction] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [DateOfIncorp] date NULL,
  [NormalYearEndDate] varchar(5) NULL,
  [NonTaxDeadlineNature] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [NonTaxDeadlineDate] varchar(5) NULL,
  [LastClientStatus] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [LastClientStatusDate] date NULL,
  [AcMgr] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  UNIQUE (ClientCode1),
  constraint fk_AcMgr FOREIGN KEY(AcMgr) REFERENCES  [listacmgr](AcMgr)
)
GO
ALTER TABLE [dbo].[clientmtn] SET (LOCK_ESCALATION = TABLE)
GO
INSERT INTO movedb.dbo.clientmtn (ClientCode1,ClientCode2,ClientCode3,ClientName,ClientLegalEntity,ClientJurisdiction,DateOfIncorp,NormalYearEndDate,NonTaxDeadlineNature,NonTaxDeadlineDate,LastClientStatus,LastClientStatusDate,AcMgr) VALUES
   ('H001','HC','A1','Hong Kong Company 1','Ltd','HK','2020-01-01','12-31',NULL,'12-31',NULL,NULL,'AC1'),
   ('H002','HS','A1','HS Technology ','Ltd','HK',NULL,NULL,NULL,NULL,NULL,NULL,'AC1'),
   ('Z001','ZS','B1','ZS company','Ltd','BVI','2017-03-01 00:00:00.0','09-30',NULL,NULL,NULL,NULL,'KK'),
   ('T001','T','D1','Testing','Unl','PRC','2020-10-06',NULL,NULL,NULL,NULL,'2020-10-20','KK');



CREATE TABLE [dbo].[job] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [JobCode] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [RecordDate] date NULL,
  [ClientCode1] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [JobNature] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [JobPeriodFrom] date NULL,
  [JobPeriodTo] date NULL,
  [OfficialDeadline] date NULL,
  [JobNo] int NULL,
  [QuotationVia] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [QuotationSentDate] date NULL,
  [QuotationProposedFee] float(53) NULL,
  [QuotationConfirmedDate] date NULL,
  [QuotationAgreedFee] float(53) NULL,
  [WorkingDeadline] date NULL,
  [JobDeadline] date NULL,
  [S1DCDocRequestVia] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S1DCDocRequestDate] date NULL,
  [S1DCDocReceivedToHKO1stDate] date NULL,
  [S1DCDocReceivedToHKO2ndDate] date NULL,
  [S1DCDocReceivedLastdate80] date NULL,
  [S1DCDocReceivedToHKOContent] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S1DCStaff] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S1DCok] int NULL,
  [S2DDOfficeHandled] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S2DDDocTsfvia] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S2DDDocTsfArrivalDate] date NULL,
  [S2DDBreifingDate] date NULL,
  [S2DDStaff] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S2DDok] int NULL,
  [S3ACCommenceDate] date NULL,
  [S3ACStaff1] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S3ACStaff2] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S3ACInfoOutstanding1st] date NULL,
  [S3ACInfoOutstanding1stReply] date NULL,
  [S3ACInfoOutstanding2nd] date NULL,
  [S3ACInfoOutstanding2ndReply] date NULL,
  [S3ACStaff3] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S3ACDraftFSDate] date NULL,
  [S3ACStaff4] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S3ACok] int NULL,
  [S4FSR1stReviewDate] date NULL,
  [S4FSR1stReviewAmendedDate] date NULL,
  [S4FSR2ndReviewDate] date NULL,
  [S4FSR2ndReviewAmendedDate] date NULL,
  [S4FSRStaff] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S4FSRok] int NULL,
  [S5FSFChecklistSignoffBy] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S5FSFChecklistSignoffDate] date NULL,
  [S5FSFFSPrintedBy] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S5FSFFSPrintedDate] date NULL,
  [S5FSFDNIssuedBy] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S5FSFDNNoxx] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S5FSFDNDatexx] date NULL,
  [S5FSFDNAmountxx] float(53) NULL,
  [S5FSFFSPackeSentBy] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S5FSFFSPackeSentDate] date NULL,
  [S5FSFNoOfQFrClient] int NULL,
  [S5FSFok] int NULL,
  [S6DFPackedUpClientDoc] int NULL,
  [S6DFPackedUpSoftcopy] int NULL,
  [S6DFPackedUpHardcopy] int NULL,
  [S6DFFiledDoc] int NULL,
  [S6DFFiledDate] date NULL,
  [S6DFFiledStaff] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S6DFDocLoc] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [S6DFok] int NULL,
  [SRDRHKODate] date NULL,
  [SRDRStoreLoc] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [SRDRDocDespatchedTo] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [SRDRDocDespatchedInviteDate] date NULL,
  [SRDRDocDespatchedDeliveryDate] date NULL,
  [SRDRDocDespatchedDeliveryStaff] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [SRDRok] int NULL,
  [Remarks1] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [Remarks2] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [Done] int NULL,
  [DNRecvDate] date NULL,
  [Paid] int NULL,
  [MSPctI] float(53) NULL,
  [MSEntitledAmount1] float(53) NULL,
  [MSPaidDateI] date NULL,
  [MSPctII] float(53) NULL,
  [MSAcMgrII] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [MSEntitledAmount2] float(53) NULL,
  [MSPaidDateII] date NULL,
  [SIBSOverallPct] float(53) NULL,
  [SIBSS1SetPct] float(53) NULL,
  [SIBSS1AdjPct] float(53) NULL,
  [SIBSS1CSFtr] float(53) NULL,
  [SIBSS1EntitledAmount] float(53) NULL,
  [SIBSS1PaidDate] date NULL,
  [SIBSS2SetPct] float(53) NULL,
  [SIBSS2AdjPct] float(53) NULL,
  [SIBSS2CSFtr] float(53) NULL,
  [SIBSS2EntitledAmount] float(53) NULL,
  [SIBSS2PaidDate] date NULL,
  [SIBSS3SetPct] float(53) NULL,
  [SIBSS3CSFtr] float(53) NULL,
  [SIBSS3Staff1Pct] float(53) NULL,
  [SIBSS3Staff1EntitledAmount] float(53) NULL,
  [SIBSS3Staff1PaidDate] date NULL,
  [SIBSS3Staff2Pct] float(53) NULL,
  [SIBSS3Staff2EntitledAmount] float(53) NULL,
  [SIBSS3Staff2PaidDate] date NULL,
  [SIBSS4SetPct] float(53) NULL,
  [SIBSS4AdjPct] float(53) NULL,
  [SIBSS4CSFtr] float(53) NULL,
  [SIBSS4EntitledAmount] float(53) NULL,
  [SIBSS4PaidDate] date NULL,
  [SIBSS5SetPct] float(53) NULL,
  [SIBSS5AdjPct] float(53) NULL,
  [SIBSS5CSFtr] float(53) NULL,
  [SIBSS5EntitledAmount] float(53) NULL,
  [SIBSS5PaidDate] date NULL,
  [MSSIBSRemarks] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  constraint fk_ClientCode1 FOREIGN KEY(ClientCode1) REFERENCES  [clientmtn](ClientCode1),
  constraint fk_S1DCStaff FOREIGN KEY(S1DCStaff) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S2DDStaff FOREIGN KEY(S2DDStaff) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S3ACStaff1 FOREIGN KEY(S3ACStaff1) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S3ACStaff2 FOREIGN KEY(S3ACStaff2) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S3ACStaff3 FOREIGN KEY(S3ACStaff3) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S3ACStaff4 FOREIGN KEY(S3ACStaff4) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S4FSRStaff FOREIGN KEY(S4FSRStaff) REFERENCES  [liststafflist](StaffCode),
  constraint fk_S6DFFiledStaff FOREIGN KEY(S6DFFiledStaff) REFERENCES  [liststafflist](StaffCode)
)
GO
ALTER TABLE [dbo].[job] SET (LOCK_ESCALATION = TABLE)
GO



CREATE TABLE [dbo].[loginhistory] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [UserName] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [LoginTime] datetime NULL,
  constraint fk_UserName FOREIGN KEY(UserName) REFERENCES  [asuser](UserName)
)
GO
ALTER TABLE [dbo].[loginhistory] SET (LOCK_ESCALATION = TABLE)
GO



CREATE TABLE [dbo].[sysparam] (
  [ID] int NOT NULL IDENTITY(1,1) PRIMARY KEY,
  [ParamType] varchar(255) COLLATE Chinese_PRC_CI_AS NULL,
  [ParamValue] varchar(255) COLLATE Chinese_PRC_CI_AS NULL
)
GO
ALTER TABLE [dbo].[sysparam] SET (LOCK_ESCALATION = TABLE)
GO
INSERT INTO movedb.dbo.sysparam (ParamType,ParamValue) VALUES
   ('YearStartDay','0401'),
   ('OfficeLoc','[''HKG'',''GZ1'',GZ2'']'),
   ('ClientLegalEntity','[''Ltd'',''Unl'',''BMO'',''Ind'',''-'']'),
   ('ClientJurisdiction','[''HK'',''BVI'',''PRC'',''Oth'',''-'']'),
   ('NonTaxDeadlineNature','[''x'',''CIB'',''SFC'',''IRD'',''Oth'',''-'']'),
   ('LastClientStatus','[''-'',''Own'',''Chg'',''Res'',''LC'',''Drg'',''Dis'',''x'']'),
   ('ClientCode3','[''Act'',''NA'',''Dis'']'),
   ('S2DDOfficeHandled','[''HK'',''GZ'',''SZ'']'),
   ('S2DDDocTsfvia','[''Cour'', ''Post'', ''Hand'', ''Oth'', ''n/a'']'),
   ('JobNature','[''Mth Ac'',''Anu Ac'', ''Per Ac'', ''Spc'', ''-'']');
INSERT INTO movedb.dbo.sysparam (ParamType,ParamValue) VALUES
   ('ListDocLoc','[''GZO'',''HKO as'',''HKO oa'',''HKO wh'',''Other'',''SZO'']'),
   ('ListSentOutVia','[''-'',''Email'', ''Fax'', ''Other'', ''WeChat ..'']'),
   ('Part1Adj','["-2.5%","-2.0%","-1.5%","-1.0%","-0.5%","0.0%","0.5%","1.0%","1.5%","2.0%","2.5%"]'),
   ('Part2Adj','["-2.5%","-2.0%","-1.5%","-1.0%","-0.5%","0.0%","0.5%","1.0%","1.5%","2.0%","2.5%"]'),
   ('Part3Adj','["-2.5%","-2.0%","-1.5%","-1.0%","-0.5%","0.0%","0.5%","1.0%","1.5%","2.0%","2.5%"]'),
   ('CSFactor','["0.90","0.95","1.0","1.05","1.10","1.125"]');

