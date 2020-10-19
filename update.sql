
--ALTER TABLE `Allocation` CHANGE `DNRecvDate` `DNRecvDate` DATE NULL DEFAULT NULL, CHANGE `MSPaidDateI` `MSPaidDateI` DATE NULL DEFAULT NULL, CHANGE `MSPaidDateII` `MSPaidDateII` DATE NULL DEFAULT NULL, CHANGE `SIBSS1PaidDate` `SIBSS1PaidDate` DATE NULL DEFAULT NULL, CHANGE `SIBSS2PaidDate` `SIBSS2PaidDate` DATE NULL DEFAULT NULL, CHANGE `SIBSS3Staff1PaidDate` `SIBSS3Staff1PaidDate` DATE NULL DEFAULT NULL, CHANGE `SIBSS3Staff2PaidDate` `SIBSS3Staff2PaidDate` DATE NULL DEFAULT NULL, CHANGE `SIBSS4PaidDate` `SIBSS4PaidDate` DATE NULL DEFAULT NULL, CHANGE `SIBSS5PaidDate` `SIBSS5PaidDate` DATE NULL DEFAULT NULL;

--ALTER TABLE `ClientMtn` CHANGE `DateOfIncorp` `DateOfIncorp` DATE NULL DEFAULT NULL, CHANGE `NormalYearEndDate` `NormalYearEndDate` DATE NOT NULL, CHANGE `NonTaxDeadlineDate` `NonTaxDeadlineDate` DATE NULL DEFAULT NULL, CHANGE `LastClientStatusDate` `LastClientStatusDate` DATE NULL DEFAULT NULL;

--ALTER TABLE `JobMtn` CHANGE `RecordDate` `RecordDate` DATE NULL DEFAULT NULL, CHANGE `JobPeriodFrom` `JobPeriodFrom` DATE NULL DEFAULT NULL, CHANGE `JobPeriodTo` `JobPeriodTo` DATE NOT NULL, CHANGE `OfficialDeadline` `OfficialDeadline` DATE NOT NULL, CHANGE `QuotationSentDate` `QuotationSentDate` DATE NULL DEFAULT NULL, CHANGE `QuotationConfirmedDate` `QuotationConfirmedDate` DATE NULL DEFAULT NULL, CHANGE `WorkingDeadline` `WorkingDeadline` DATE NOT NULL, CHANGE `JobDeadline` `JobDeadline` DATE NOT NULL;

--ALTER TABLE `JobProg` CHANGE `S1DCDocRequestDate` `S1DCDocRequestDate` DATE NULL DEFAULT NULL, CHANGE `S1DCDocReceivedToHKO1stDate` `S1DCDocReceivedToHKO1stDate` DATE NULL DEFAULT NULL, CHANGE `S1DCDocReceivedToHKO2ndDate` `S1DCDocReceivedToHKO2ndDate` DATE NULL DEFAULT NULL, CHANGE `S1DCDocReceivedLastdate80` `S1DCDocReceivedLastdate80` DATE NULL DEFAULT NULL, CHANGE `S2DDDocTsfArrivalDate` `S2DDDocTsfArrivalDate` DATE NULL DEFAULT NULL, CHANGE `S2DDBreifingDate` `S2DDBreifingDate` DATE NULL DEFAULT NULL, CHANGE `S3ACCommenceDate` `S3ACCommenceDate` DATE NULL DEFAULT NULL, CHANGE `S3ACInfoOutstanding1st` `S3ACInfoOutstanding1st` DATE NULL DEFAULT NULL, CHANGE `S3ACInfoOutstanding1stReply` `S3ACInfoOutstanding1stReply` DATE NULL DEFAULT NULL, CHANGE `S3ACInfoOutstanding2nd` `S3ACInfoOutstanding2nd` DATE NULL DEFAULT NULL, CHANGE `S3ACInfoOutstanding2ndReply` `S3ACInfoOutstanding2ndReply` DATE NULL DEFAULT NULL, CHANGE `S3ACDraftFSDate` `S3ACDraftFSDate` DATE NULL DEFAULT NULL, CHANGE `S4FSR1stReviewDate` `S4FSR1stReviewDate` DATE NULL DEFAULT NULL, CHANGE `S4FSR1stReviewAmendedDate` `S4FSR1stReviewAmendedDate` DATE NULL DEFAULT NULL, CHANGE `S4FSR2ndReviewDate` `S4FSR2ndReviewDate` DATE NULL DEFAULT NULL, CHANGE `S4FSR2ndReviewAmendedDate` `S4FSR2ndReviewAmendedDate` DATE NULL DEFAULT NULL, CHANGE `S5FSFChecklistSignoffDate` `S5FSFChecklistSignoffDate` DATE NULL DEFAULT NULL, CHANGE `S5FSFFSPrintedDate` `S5FSFFSPrintedDate` DATE NULL DEFAULT NULL, CHANGE `S5FSFDNDatexx` `S5FSFDNDatexx` DATE NULL DEFAULT NULL, CHANGE `S5FSFFSPackeSentDate` `S5FSFFSPackeSentDate` DATE NULL DEFAULT NULL, CHANGE `S6DFFiledDate` `S6DFFiledDate` DATE NULL DEFAULT NULL, CHANGE `SRDRHKODate` `SRDRHKODate` DATE NULL DEFAULT NULL, CHANGE `SRDRDocDespatchedInviteDate` `SRDRDocDespatchedInviteDate` DATE NULL DEFAULT NULL, CHANGE `SRDRDocDespatchedDeliveryDate` `SRDRDocDespatchedDeliveryDate` DATE NULL DEFAULT NULL;

CREATE TABLE `allocationparam`  (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FieldName` varchar(255) not NULL,
  `FieldValue` varchar(255) not NULL,
  PRIMARY KEY (`ID`)
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;
INSERT INTO `allocationparam` (`ID`, `FieldName`, `FieldValue`) VALUES
(1, 'SIBSOverallPct', ''),
(2, 'SIBSS1SetPct', ''),
(3, 'SIBSS2SetPct', ''),
(4, 'SIBSS3SetPct', ''),
(5, 'SIBSS4SetPct', ''),
(6, 'SIBSS5SetPct', '');


CREATE TABLE `allocationhistory`  (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FieldName` varchar(255) not NULL,
  `FieldValue` varchar(255) not NULL,
  `ModifyDate` datetime not NULL,
  PRIMARY KEY (`ID`)
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;