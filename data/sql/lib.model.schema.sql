

/* -----------------------------------------------------------------------
   jobeet_category
   ----------------------------------------------------------------------- */

DROP TABLE "jobeet_category" CASCADE CONSTRAINTS;

DROP SEQUENCE "jobeet_category_SEQ";


CREATE TABLE "jobeet_category"
(
	"id" NUMBER  NOT NULL,
	"name" NVARCHAR2(255)  NOT NULL
);

	ALTER TABLE "jobeet_category"
		ADD CONSTRAINT "jobeet_category_PK"
	PRIMARY KEY ("id");
CREATE SEQUENCE "jobeet_category_SEQ" INCREMENT BY 1 START WITH 1 NOMAXVALUE NOCYCLE NOCACHE ORDER;


/* -----------------------------------------------------------------------
   jobeet_job
   ----------------------------------------------------------------------- */

DROP TABLE "jobeet_job" CASCADE CONSTRAINTS;

DROP SEQUENCE "jobeet_job_SEQ";


CREATE TABLE "jobeet_job"
(
	"id" NUMBER  NOT NULL,
	"category_id" NUMBER  NOT NULL,
	"type" NVARCHAR2(255),
	"company" NVARCHAR2(255)  NOT NULL,
	"logo" NVARCHAR2(255),
	"url" NVARCHAR2(255),
	"position" NVARCHAR2(255)  NOT NULL,
	"location" NVARCHAR2(255)  NOT NULL,
	"description" NVARCHAR2(2000)  NOT NULL,
	"how_to_apply" NVARCHAR2(2000)  NOT NULL,
	"token" NVARCHAR2(255)  NOT NULL,
	"is_public" NUMBER(1,0) default 1 NOT NULL,
	"is_activated" NUMBER(1,0) default 0 NOT NULL,
	"email" NVARCHAR2(255)  NOT NULL,
	"expires_at" TIMESTAMP  NOT NULL,
	"created_at" TIMESTAMP,
	"updated_at" TIMESTAMP
);

	ALTER TABLE "jobeet_job"
		ADD CONSTRAINT "jobeet_job_PK"
	PRIMARY KEY ("id");
CREATE SEQUENCE "jobeet_job_SEQ" INCREMENT BY 1 START WITH 1 NOMAXVALUE NOCYCLE NOCACHE ORDER;

ALTER TABLE "jobeet_job" ADD CONSTRAINT "jobeet_job_FK_1" FOREIGN KEY ("category_id") REFERENCES "jobeet_category" ("id");


/* -----------------------------------------------------------------------
   jobeet_affiliate
   ----------------------------------------------------------------------- */

DROP TABLE "jobeet_affiliate" CASCADE CONSTRAINTS;

DROP SEQUENCE "jobeet_affiliate_SEQ";


CREATE TABLE "jobeet_affiliate"
(
	"id" NUMBER  NOT NULL,
	"url" NVARCHAR2(255)  NOT NULL,
	"email" NVARCHAR2(255)  NOT NULL,
	"token" NVARCHAR2(255)  NOT NULL,
	"is_active" NUMBER(1,0) default 0 NOT NULL,
	"created_at" TIMESTAMP
);

	ALTER TABLE "jobeet_affiliate"
		ADD CONSTRAINT "jobeet_affiliate_PK"
	PRIMARY KEY ("id");
CREATE SEQUENCE "jobeet_affiliate_SEQ" INCREMENT BY 1 START WITH 1 NOMAXVALUE NOCYCLE NOCACHE ORDER;


/* -----------------------------------------------------------------------
   jobeet_category_affiliate
   ----------------------------------------------------------------------- */

DROP TABLE "jobeet_category_affiliate" CASCADE CONSTRAINTS;


CREATE TABLE "jobeet_category_affiliate"
(
	"category_id" NUMBER  NOT NULL,
	"affiliate_id" NUMBER  NOT NULL
);

	ALTER TABLE "jobeet_category_affiliate"
		ADD CONSTRAINT "jobeet_category_affiliate_PK"
	PRIMARY KEY ("category_id","affiliate_id");

ALTER TABLE "jobeet_category_affiliate" ADD CONSTRAINT "jobeet_category_affiliate_FK_1" FOREIGN KEY ("category_id") REFERENCES "jobeet_category" ("id") ON DELETE CASCADE;

ALTER TABLE "jobeet_category_affiliate" ADD CONSTRAINT "jobeet_category_affiliate_FK_2" FOREIGN KEY ("affiliate_id") REFERENCES "jobeet_affiliate" ("id") ON DELETE CASCADE;
