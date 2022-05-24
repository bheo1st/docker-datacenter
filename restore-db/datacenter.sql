--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.24
-- Dumped by pg_dump version 9.6.24

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: mst; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA mst;


ALTER SCHEMA mst OWNER TO postgres;

--
-- Name: svc; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA svc;


ALTER SCHEMA svc OWNER TO postgres;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- Name: f_generate_no(character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.f_generate_no(p_code character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
 v_format VARCHAR(50);
 v_curr_no INT;
 v_nomor VARCHAR(30);
 v_jml_digit_no INT;
BEGIN
    SELECT format,jml_digit_no 
    INTO v_format,v_jml_digit_no
    FROM t_m_code
    WHERE c_code = p_code; 
-----
    BEGIN
    SELECT curr_no + 1
    INTO v_curr_no
    FROM t_m_code_batch
    WHERE c_code = p_code;
    IF NOT FOUND THEN
        v_curr_no := 1; 
        INSERT INTO t_m_code_batch (c_code, c_bulan, c_tahun, curr_no) VALUES (p_code,'00','0000',1);
    ELSE
        UPDATE t_m_code_batch SET curr_no = curr_no + 1 WHERE c_code = p_code;
    END IF;
    END;
----   
    SELECT REPLACE(v_format,'P_NO',LPAD(v_curr_no::TEXT,v_jml_digit_no,'0')) INTO v_nomor;
----
    RETURN v_nomor;
END;
$$;


ALTER FUNCTION public.f_generate_no(p_code character varying) OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: t_company; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_company (
    company_id integer NOT NULL,
    company_name character varying(255),
    company_address character varying(255),
    created_at timestamp(6) without time zone DEFAULT now() NOT NULL,
    created_by character varying(255),
    deleted_at timestamp(6) without time zone
);


ALTER TABLE mst.t_company OWNER TO postgres;

--
-- Name: t_company_company_id_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_company_company_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE mst.t_company_company_id_seq OWNER TO postgres;

--
-- Name: t_company_company_id_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_company_company_id_seq OWNED BY mst.t_company.company_id;


--
-- Name: t_gedung; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_gedung (
    gedung_id integer NOT NULL,
    gedung_name character varying(255),
    gedung_address character varying(255),
    created_at timestamp(6) without time zone NOT NULL,
    created_by character varying(255),
    deleted_at timestamp(6) without time zone,
    company_id integer
);


ALTER TABLE mst.t_gedung OWNER TO postgres;

--
-- Name: t_gedung_gedung_id_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_gedung_gedung_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE mst.t_gedung_gedung_id_seq OWNER TO postgres;

--
-- Name: t_gedung_gedung_id_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_gedung_gedung_id_seq OWNED BY mst.t_gedung.gedung_id;


--
-- Name: t_lokasi; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_lokasi (
    id_lokasi integer NOT NULL,
    nama_lokasi character varying(255),
    created_at timestamp(6) without time zone DEFAULT now() NOT NULL,
    created_by character varying(255),
    modified_at timestamp(6) without time zone,
    modified_by character varying(255),
    deleted_at timestamp(6) without time zone,
    deleted_by character varying(255),
    "desc" text,
    mid_lokasi text DEFAULT public.f_generate_no('MID_LOC'::character varying),
    company_id integer NOT NULL,
    lisensi text,
    status_gate_in boolean DEFAULT true
);


ALTER TABLE mst.t_lokasi OWNER TO postgres;

--
-- Name: t_lokasi_id_lokasi_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_lokasi_id_lokasi_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE mst.t_lokasi_id_lokasi_seq OWNER TO postgres;

--
-- Name: t_lokasi_id_lokasi_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_lokasi_id_lokasi_seq OWNED BY mst.t_lokasi.id_lokasi;


--
-- Name: t_rack; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_rack (
    rack_id integer NOT NULL,
    rack_name character varying(255),
    created_at timestamp(6) without time zone NOT NULL,
    created_by character varying(255),
    deleted_at timestamp(6) without time zone,
    room_id integer
);


ALTER TABLE mst.t_rack OWNER TO postgres;

--
-- Name: t_rack_rack_id_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_rack_rack_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE mst.t_rack_rack_id_seq OWNER TO postgres;

--
-- Name: t_rack_rack_id_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_rack_rack_id_seq OWNED BY mst.t_rack.rack_id;


--
-- Name: t_room; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_room (
    room_id integer NOT NULL,
    room_name character varying(255),
    created_at timestamp(6) without time zone NOT NULL,
    deleted_at timestamp(6) without time zone,
    created_by character varying(255),
    gedung_id integer
);


ALTER TABLE mst.t_room OWNER TO postgres;

--
-- Name: t_room_room_id_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_room_room_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE mst.t_room_room_id_seq OWNER TO postgres;

--
-- Name: t_room_room_id_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_room_room_id_seq OWNED BY mst.t_room.room_id;


--
-- Name: t_server; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_server (
    server_id integer NOT NULL,
    server_name character varying(255),
    type_os character varying(255),
    server_cpu character varying(255),
    server_ram character varying(255),
    server_storage character varying(255),
    created_at timestamp(6) without time zone NOT NULL,
    created_by character varying(255),
    deleted_at timestamp(6) without time zone,
    rack_id integer,
    server_ip character varying(255)
);


ALTER TABLE mst.t_server OWNER TO postgres;

--
-- Name: t_server_server_id_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_server_server_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE mst.t_server_server_id_seq OWNER TO postgres;

--
-- Name: t_server_server_id_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_server_server_id_seq OWNED BY mst.t_server.server_id;


--
-- Name: t_virtual; Type: TABLE; Schema: mst; Owner: postgres
--

CREATE TABLE mst.t_virtual (
    virtual_id integer NOT NULL,
    virtual_name character varying(255),
    virtual_ip character varying(255),
    virtual_username character varying(255),
    virtual_password character varying(255),
    created_at timestamp(6) without time zone NOT NULL,
    created_by character varying(255),
    deleted_at timestamp(6) without time zone,
    server_id integer,
    type_os character varying(255),
    virtual_ram character varying(255),
    virtual_cpu character varying(255),
    virtual_storage character varying(255)
);


ALTER TABLE mst.t_virtual OWNER TO postgres;

--
-- Name: t_virtual_server_virtual_id_seq; Type: SEQUENCE; Schema: mst; Owner: postgres
--

CREATE SEQUENCE mst.t_virtual_server_virtual_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE mst.t_virtual_server_virtual_id_seq OWNER TO postgres;

--
-- Name: t_virtual_server_virtual_id_seq; Type: SEQUENCE OWNED BY; Schema: mst; Owner: postgres
--

ALTER SEQUENCE mst.t_virtual_server_virtual_id_seq OWNED BY mst.t_virtual.virtual_id;


--
-- Name: t_m_code; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.t_m_code (
    c_code character varying(10) NOT NULL,
    n_code character varying(40),
    format character varying(50),
    jml_digit_no numeric,
    format_bulan character varying(5)
);


ALTER TABLE public.t_m_code OWNER TO postgres;

--
-- Name: t_m_code_batch; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.t_m_code_batch (
    c_code character varying(10) NOT NULL,
    c_bulan character varying(2) NOT NULL,
    c_tahun character varying(4) NOT NULL,
    curr_no integer
);


ALTER TABLE public.t_m_code_batch OWNER TO postgres;

--
-- Name: t_m_company; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.t_m_company (
    c_company integer NOT NULL,
    n_company character varying,
    d_delete timestamp(6) without time zone
);


ALTER TABLE public.t_m_company OWNER TO postgres;

--
-- Name: t_m_company_c_company_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.t_m_company_c_company_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.t_m_company_c_company_seq OWNER TO postgres;

--
-- Name: t_m_company_c_company_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.t_m_company_c_company_seq OWNED BY public.t_m_company.c_company;


--
-- Name: t_license; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_license (
    license text NOT NULL,
    license_status boolean DEFAULT false,
    activation_date timestamp(6) without time zone,
    id_company integer,
    id_lokasi integer
);


ALTER TABLE svc.t_license OWNER TO postgres;

--
-- Name: t_m_access; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_m_access (
    c_module character varying NOT NULL,
    c_menu character varying NOT NULL,
    c_role character varying NOT NULL,
    b_new boolean DEFAULT false NOT NULL,
    b_update boolean DEFAULT false NOT NULL,
    b_delete boolean DEFAULT false NOT NULL
);


ALTER TABLE svc.t_m_access OWNER TO postgres;

--
-- Name: t_m_level; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_m_level (
    i_level integer NOT NULL,
    n_level character varying(255)
);


ALTER TABLE svc.t_m_level OWNER TO postgres;

--
-- Name: t_m_level_i_level_seq; Type: SEQUENCE; Schema: svc; Owner: postgres
--

CREATE SEQUENCE svc.t_m_level_i_level_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE svc.t_m_level_i_level_seq OWNER TO postgres;

--
-- Name: t_m_level_i_level_seq; Type: SEQUENCE OWNED BY; Schema: svc; Owner: postgres
--

ALTER SEQUENCE svc.t_m_level_i_level_seq OWNED BY svc.t_m_level.i_level;


--
-- Name: t_m_menu; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_m_menu (
    c_module character varying NOT NULL,
    c_menu character varying NOT NULL,
    n_menu character varying,
    n_url character varying DEFAULT '#'::character varying,
    n_icon character varying DEFAULT 'icon application_form'::character varying,
    b_leaf boolean DEFAULT true,
    b_new boolean DEFAULT false NOT NULL,
    b_update boolean DEFAULT false NOT NULL,
    b_delete boolean DEFAULT false NOT NULL,
    is_parent boolean DEFAULT false NOT NULL,
    parent_menu character varying(255)
);


ALTER TABLE svc.t_m_menu OWNER TO postgres;

--
-- Name: t_m_module; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_m_module (
    c_module character varying DEFAULT public.f_generate_no('CMOD'::character varying) NOT NULL,
    n_desc character varying,
    n_sort smallint,
    n_module character varying,
    c_app character(1)
);


ALTER TABLE svc.t_m_module OWNER TO postgres;

--
-- Name: t_m_role; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_m_role (
    c_role character varying DEFAULT public.f_generate_no('CRO'::character varying) NOT NULL,
    n_desc character varying,
    i_level smallint,
    n_role character varying,
    d_entry timestamp(6) without time zone DEFAULT now(),
    e_entry character varying(255),
    d_modif timestamp(6) without time zone,
    e_modif character varying(255)
);


ALTER TABLE svc.t_m_role OWNER TO postgres;

--
-- Name: t_m_user; Type: TABLE; Schema: svc; Owner: postgres
--

CREATE TABLE svc.t_m_user (
    n_user character varying NOT NULL,
    n_pass character varying NOT NULL,
    n_name character varying NOT NULL,
    n_mail character varying,
    n_phone character varying,
    b_admin boolean DEFAULT true NOT NULL,
    b_delete boolean DEFAULT false NOT NULL,
    c_role character varying,
    c_company integer,
    d_entry timestamp(6) without time zone DEFAULT now() NOT NULL,
    e_entry character varying(255),
    d_modif timestamp(6) without time zone,
    e_modif character varying(255),
    d_delete timestamp(6) without time zone,
    e_delete character varying(255),
    b_init boolean DEFAULT false,
    company_id integer,
    id_lokasi integer
);


ALTER TABLE svc.t_m_user OWNER TO postgres;

--
-- Name: t_company company_id; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_company ALTER COLUMN company_id SET DEFAULT nextval('mst.t_company_company_id_seq'::regclass);


--
-- Name: t_gedung gedung_id; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_gedung ALTER COLUMN gedung_id SET DEFAULT nextval('mst.t_gedung_gedung_id_seq'::regclass);


--
-- Name: t_lokasi id_lokasi; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_lokasi ALTER COLUMN id_lokasi SET DEFAULT nextval('mst.t_lokasi_id_lokasi_seq'::regclass);


--
-- Name: t_rack rack_id; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_rack ALTER COLUMN rack_id SET DEFAULT nextval('mst.t_rack_rack_id_seq'::regclass);


--
-- Name: t_room room_id; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_room ALTER COLUMN room_id SET DEFAULT nextval('mst.t_room_room_id_seq'::regclass);


--
-- Name: t_server server_id; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_server ALTER COLUMN server_id SET DEFAULT nextval('mst.t_server_server_id_seq'::regclass);


--
-- Name: t_virtual virtual_id; Type: DEFAULT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_virtual ALTER COLUMN virtual_id SET DEFAULT nextval('mst.t_virtual_server_virtual_id_seq'::regclass);


--
-- Name: t_m_company c_company; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.t_m_company ALTER COLUMN c_company SET DEFAULT nextval('public.t_m_company_c_company_seq'::regclass);


--
-- Name: t_m_level i_level; Type: DEFAULT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_level ALTER COLUMN i_level SET DEFAULT nextval('svc.t_m_level_i_level_seq'::regclass);


--
-- Data for Name: t_company; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_company (company_id, company_name, company_address, created_at, created_by, deleted_at) FROM stdin;
19	JARING MAL	KREKOT	2022-04-26 13:09:25.955364	admin	2022-05-10 14:05:27.894171
17	JARING SOLUSI APLIKASI	JL KREKOT  BUNDER RAYA NO 26	2022-04-25 19:41:46.995717	admin	\N
16	JARING MAL	JL KREKOT  BUNDER RAYA NO 26	2022-04-26 13:08:22.13635	admin	\N
20	SIGNAL	JL KREKOT  BUNDER RAYA NO	2022-04-26 13:24:02.6477	admin	\N
\.


--
-- Name: t_company_company_id_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_company_company_id_seq', 22, true);


--
-- Data for Name: t_gedung; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_gedung (gedung_id, gedung_name, gedung_address, created_at, created_by, deleted_at, company_id) FROM stdin;
21	KREKOT 26	JL KREKOT BUNDER NO 26	2022-04-26 12:56:02.54132	admin	\N	16
23	CYBER25	JL KREKOT BUNDER 	2022-04-26 12:57:18.277528	admin	2022-04-26 15:15:30.075393	18
24	TEST1	JL KREKOT BUNDER 	2022-05-10 16:09:51.917809	admin	2022-05-10 16:10:04.563441	16
22	REMPOA 26	JL REMPOA	2022-05-10 16:12:53.393683	admin	\N	20
25	TEST	JL KUNINGAN 26	2022-05-24 05:17:36.562303	admin	\N	17
\.


--
-- Name: t_gedung_gedung_id_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_gedung_gedung_id_seq', 27, true);


--
-- Data for Name: t_lokasi; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_lokasi (id_lokasi, nama_lokasi, created_at, created_by, modified_at, modified_by, deleted_at, deleted_by, "desc", mid_lokasi, company_id, lisensi, status_gate_in) FROM stdin;
\.


--
-- Name: t_lokasi_id_lokasi_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_lokasi_id_lokasi_seq', 31, true);


--
-- Data for Name: t_rack; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_rack (rack_id, rack_name, created_at, created_by, deleted_at, room_id) FROM stdin;
7	B34	2022-04-26 15:09:03.233158	admin	2022-05-11 11:31:29.074365	2
6	A-1	2022-05-11 15:40:08.800897	admin	\N	2
\.


--
-- Name: t_rack_rack_id_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_rack_rack_id_seq', 9, true);


--
-- Data for Name: t_room; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_room (room_id, room_name, created_at, deleted_at, created_by, gedung_id) FROM stdin;
2	LT-3	2022-04-26 12:09:03.134453	\N	admin	21
1	LT-1	2022-05-10 16:15:06.827423	\N	admin	25
\.


--
-- Name: t_room_room_id_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_room_room_id_seq', 4, true);


--
-- Data for Name: t_server; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_server (server_id, server_name, type_os, server_cpu, server_ram, server_storage, created_at, created_by, deleted_at, rack_id, server_ip) FROM stdin;
3	IBM 250	Centos 6	4	4	250	2022-04-28 11:09:35.403615	admin	\N	6	172.100.100.201
1	HP DL380 G7	PROXMOX	24	64	400	2022-04-28 11:09:56.005746	admin	\N	6	10.100.10.30
2	DL 380 G6	Centos 7	12	16	500	2022-05-11 15:41:07.082156	admin	\N	6	172.100.100.202
\.


--
-- Name: t_server_server_id_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_server_server_id_seq', 5, true);


--
-- Data for Name: t_virtual; Type: TABLE DATA; Schema: mst; Owner: postgres
--

COPY mst.t_virtual (virtual_id, virtual_name, virtual_ip, virtual_username, virtual_password, created_at, created_by, deleted_at, server_id, type_os, virtual_ram, virtual_cpu, virtual_storage) FROM stdin;
3	SIGNAL	192.168.55.30	root	gampang42	2022-04-29 11:30:35.418272	admin	\N	3	\N	\N	\N	\N
2	LEMIHEALTH	192.168.99.54	bheo2nd	gampang42	2022-04-29 11:30:46.854328	admin	\N	3	\N	\N	\N	\N
4	KARCISKU	192.168.99.22	root	1sampai8	2022-04-29 12:44:22.331912	admin	\N	1	\N	\N	\N	\N
\.


--
-- Name: t_virtual_server_virtual_id_seq; Type: SEQUENCE SET; Schema: mst; Owner: postgres
--

SELECT pg_catalog.setval('mst.t_virtual_server_virtual_id_seq', 6, true);


--
-- Data for Name: t_m_code; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.t_m_code (c_code, n_code, format, jml_digit_no, format_bulan) FROM stdin;
\.


--
-- Data for Name: t_m_code_batch; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.t_m_code_batch (c_code, c_bulan, c_tahun, curr_no) FROM stdin;
\.


--
-- Data for Name: t_m_company; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.t_m_company (c_company, n_company, d_delete) FROM stdin;
\.


--
-- Name: t_m_company_c_company_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.t_m_company_c_company_seq', 5, true);


--
-- Data for Name: t_license; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_license (license, license_status, activation_date, id_company, id_lokasi) FROM stdin;
VI16-JD18-MR28-9220	t	2021-01-11 20:08:45.560343	1	20
\.


--
-- Data for Name: t_m_access; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_m_access (c_module, c_menu, c_role, b_new, b_update, b_delete) FROM stdin;
CMOD001	01	CRO0001	f	f	f
CMOD001	01-01	CRO0001	f	f	f
CMOD001	01-02	CRO0001	f	f	f
CMOD002	02	CRO0001	f	f	f
CMOD002	02-01	CRO0001	t	t	t
CMOD002	02-03	CRO0001	t	t	t
CMOD002	02-03-01	CRO0001	t	t	t
CMOD002	02-03-02	CRO0001	t	t	t
CMOD002	02-03-03	CRO0001	t	t	t
CMOD002	02-03-04	CRO0001	t	t	t
CMOD002	02-03-05	CRO0001	t	t	t
CMOD005	05	CRO0001	f	f	f
CMOD005	05	CRO0006	f	f	f
CMOD005	05-01	CRO0001	f	f	f
CMOD005	05-01	CRO0006	f	f	f
CMOD005	05-03	CRO0001	f	f	f
CMOD005	05-03	CRO0006	f	f	f
CMOD005	05-04	CRO0001	f	f	f
CMOD005	05-04	CRO0006	f	f	f
CMOD001	01	CRO0007	f	f	f
CMOD001	01-01	CRO0007	f	f	f
CMOD001	01-02	CRO0007	f	f	f
CMOD002	02-03	CRO0007	f	f	f
CMOD002	02-03-01	CRO0007	f	f	f
CMOD002	02-03-02	CRO0007	f	f	f
CMOD002	02-03-03	CRO0007	f	f	f
CMOD002	02-03-04	CRO0007	f	f	f
CMOD005	05-01	CRO0007	f	f	f
CMOD005	05-03	CRO0007	f	f	f
CMOD005	05-04	CRO0007	f	f	f
CMOD002	02	CRO0008	f	f	f
CMOD002	02-03-01	CRO0008	f	f	f
CMOD002	02-03-05	CRO0008	f	f	f
CMOD001	01	CRO0005	f	f	f
CMOD001	01-01	CRO0005	f	f	f
CMOD001	01-02	CRO0005	f	f	f
CMOD002	02	CRO0005	f	f	f
CMOD002	02-03	CRO0005	f	f	f
CMOD002	02-03-01	CRO0005	f	f	f
CMOD002	02-03-02	CRO0005	f	f	f
CMOD002	02-03-03	CRO0005	f	f	f
CMOD002	02-03-04	CRO0005	f	f	f
CMOD002	02-03-05	CRO0005	f	f	f
CMOD005	05	CRO0005	f	f	f
CMOD005	05-01	CRO0005	f	f	f
CMOD005	05-03	CRO0005	f	f	f
CMOD005	05-04	CRO0005	f	f	f
\.


--
-- Data for Name: t_m_level; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_m_level (i_level, n_level) FROM stdin;
1	Super Admin
2	Admin
3	User
\.


--
-- Name: t_m_level_i_level_seq; Type: SEQUENCE SET; Schema: svc; Owner: postgres
--

SELECT pg_catalog.setval('svc.t_m_level_i_level_seq', 6, true);


--
-- Data for Name: t_m_menu; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_m_menu (c_module, c_menu, n_menu, n_url, n_icon, b_leaf, b_new, b_update, b_delete, is_parent, parent_menu) FROM stdin;
CMOD001	01	Manajemen Aplikasi	#	menu-icon mdi mdi-remote-desktop	t	f	f	f	t	\N
CMOD001	01-01	Manajemen Akses	svc/c_role	\N	f	t	t	f	f	01
CMOD001	01-02	Manajemen Akun	svc/c_user	\N	f	t	t	f	f	01
CMOD002	02	Master Data	#	menu-icon fa fa-database	t	f	f	f	t	\N
CMOD005	05	Manajemen Laporan	#	menu-icon fa fa-book	t	f	f	f	t	\N
CMOD002	02-01	Mastering Company	mst/c_company	\N	f	t	t	t	f	02
CMOD002	02-03-01	Gedung	mst/c_gedung	\N	f	f	f	f	f	02-03
CMOD002	02-03-03	Rack	mst/c_rack	\N	f	f	f	f	f	02-03
CMOD002	02-03-02	Room	mst/c_room	\N	f	f	f	f	f	02-03
CMOD002	02-03	Mastering Data Center	#	\N	t	f	f	f	f	02
CMOD002	02-03-05	Virtual Server	mst/c_virtual	\N	f	f	f	f	f	02-03
CMOD002	02-03-04	Server	mst/c_server	\N	f	f	f	f	f	02-03
CMOD005	05-01	Laporan Rack Server	rpt/c_rack	\N	f	f	f	f	f	05
CMOD005	05-03	Laporan Server Fisik	rpt/c_server	\N	f	f	f	f	f	05
CMOD005	05-04	Laporan Virtual Server	rpt/c_virtual	\N	f	f	f	f	f	05
\.


--
-- Data for Name: t_m_module; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_m_module (c_module, n_desc, n_sort, n_module, c_app) FROM stdin;
CMOD001	Module for application management	1	Manajemen Aplikasi	A
CMOD002	Module for mastering data	2	Manajemen Master Data	A
CMOD003	Module for gate	3	Manajemen Gate	A
CMOD005	Module for reporting	6	Manajemen Laporan	A
\.


--
-- Data for Name: t_m_role; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_m_role (c_role, n_desc, i_level, n_role, d_entry, e_entry, d_modif, e_modif) FROM stdin;
CRO0006		3	petugas	2021-03-12 10:26:23.85733	admin	\N	\N
CRO0001		1	System Admin	2019-05-21 22:28:16.645631	\N	2022-04-26 12:36:36	admin
CRO0007		1	User2	2021-06-28 13:31:08.849703	admin	2022-04-26 17:05:30.820752	admin
CRO0008		3	Petugas	2021-06-28 13:33:59.965991	admin	2022-04-26 17:06:08.73661	admin
CRO0005		2	Admin	2021-01-13 17:13:55.102182	admin	2022-05-11 15:42:53.886189	admin
\.


--
-- Data for Name: t_m_user; Type: TABLE DATA; Schema: svc; Owner: postgres
--

COPY svc.t_m_user (n_user, n_pass, n_name, n_mail, n_phone, b_admin, b_delete, c_role, c_company, d_entry, e_entry, d_modif, e_modif, d_delete, e_delete, b_init, company_id, id_lokasi) FROM stdin;
admin	d3e4fa19267c778c28a6c5ca34b2f757	Administrator	admin@mail.com	\N	t	f	CRO0001	3	2019-01-30 17:27:18.929022	\N	\N	\N	\N	\N	t	\N	\N
adi123	7360409d967a24b667afc33a8384ec9e	nurul hidayah	bheo93@gmail.com	0816752313	t	t	CRO0008	\N	2021-06-28 13:36:43.479931	admin	2022-04-22 00:27:21.808806	admin	2022-04-22 00:34:56.263773	admin	f	\N	\N
test123	e10adc3949ba59abbe56e057f20f883e	nurul hidayah	bheo93@gmail	0816752313	t	t	CRO0005	\N	2022-04-21 22:09:28.911608	admin	2022-04-22 15:11:02.000855	admin	2022-04-22 15:41:20.132435	admin	f	\N	\N
bheo2nd	d3e4fa19267c778c28a6c5ca34b2f757	nurul hidayah	bheo93@gmail.com	0816752313	t	f	CRO0005	\N	2022-04-21 11:57:39.059703	admin	2022-04-25 16:40:44.184523	admin	\N	\N	f	16	\N
wanto	d3e4fa19267c778c28a6c5ca34b2f757	nurul hidayah	bheo93@gmail.com		t	t	CRO0005	\N	2022-04-23 12:57:50.517387	admin	2022-04-26 17:08:44.904917	admin	2022-05-11 15:38:54.712045	admin	f	17	\N
bheo	d3e4fa19267c778c28a6c5ca34b2f757	nurul hidayah	bheo93@gmail.com	0816752313	t	f	CRO0005	\N	2022-04-21 22:04:20.505478	admin	2022-05-11 15:43:20.844843	admin	\N	\N	f	17	\N
\.


--
-- Name: t_company t_company_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_company
    ADD CONSTRAINT t_company_pkey PRIMARY KEY (company_id);


--
-- Name: t_gedung t_gedung_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_gedung
    ADD CONSTRAINT t_gedung_pkey PRIMARY KEY (gedung_id);


--
-- Name: t_lokasi t_lokasi_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_lokasi
    ADD CONSTRAINT t_lokasi_pkey PRIMARY KEY (id_lokasi);


--
-- Name: t_rack t_rack_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_rack
    ADD CONSTRAINT t_rack_pkey PRIMARY KEY (rack_id);


--
-- Name: t_room t_room_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_room
    ADD CONSTRAINT t_room_pkey PRIMARY KEY (room_id);


--
-- Name: t_server t_server_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_server
    ADD CONSTRAINT t_server_pkey PRIMARY KEY (server_id);


--
-- Name: t_virtual t_virtual_server_pkey; Type: CONSTRAINT; Schema: mst; Owner: postgres
--

ALTER TABLE ONLY mst.t_virtual
    ADD CONSTRAINT t_virtual_server_pkey PRIMARY KEY (virtual_id);


--
-- Name: t_m_code_batch t_m_code_batch_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.t_m_code_batch
    ADD CONSTRAINT t_m_code_batch_pkey PRIMARY KEY (c_code, c_bulan, c_tahun);


--
-- Name: t_m_code t_m_code_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.t_m_code
    ADD CONSTRAINT t_m_code_pkey PRIMARY KEY (c_code);


--
-- Name: t_m_company t_m_company_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.t_m_company
    ADD CONSTRAINT t_m_company_pkey PRIMARY KEY (c_company);


--
-- Name: t_license t_license_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_license
    ADD CONSTRAINT t_license_pkey PRIMARY KEY (license);


--
-- Name: t_m_access t_m_access_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_access
    ADD CONSTRAINT t_m_access_pkey PRIMARY KEY (c_module, c_menu, c_role);


--
-- Name: t_m_level t_m_level_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_level
    ADD CONSTRAINT t_m_level_pkey PRIMARY KEY (i_level);


--
-- Name: t_m_menu t_m_menu_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_menu
    ADD CONSTRAINT t_m_menu_pkey PRIMARY KEY (c_module, c_menu);


--
-- Name: t_m_module t_m_module_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_module
    ADD CONSTRAINT t_m_module_pkey PRIMARY KEY (c_module);


--
-- Name: t_m_role t_m_role_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_role
    ADD CONSTRAINT t_m_role_pkey PRIMARY KEY (c_role);


--
-- Name: t_m_user t_m_user_pkey; Type: CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_user
    ADD CONSTRAINT t_m_user_pkey PRIMARY KEY (n_user);


--
-- Name: t_m_access t_m_access_c_module_fkey; Type: FK CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_access
    ADD CONSTRAINT t_m_access_c_module_fkey FOREIGN KEY (c_module, c_menu) REFERENCES svc.t_m_menu(c_module, c_menu) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: t_m_access t_m_access_c_role_fkey; Type: FK CONSTRAINT; Schema: svc; Owner: postgres
--

ALTER TABLE ONLY svc.t_m_access
    ADD CONSTRAINT t_m_access_c_role_fkey FOREIGN KEY (c_role) REFERENCES svc.t_m_role(c_role) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- PostgreSQL database dump complete
--

