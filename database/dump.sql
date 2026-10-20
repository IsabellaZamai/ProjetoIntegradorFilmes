--
-- PostgreSQL database dump
--

\restrict eH0LhgLI72l7ORgvf7i9hXhXX2ZbPtWiyDI9dstpuFbXNZ3xelwRY5cJzNf3HdH

-- Dumped from database version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)
-- Dumped by pg_dump version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: comentarios; Type: TABLE; Schema: public; Owner: filmes
--

CREATE TABLE public.comentarios (
    id_comentario integer NOT NULL,
    id_usuario integer,
    id_filme integer,
    comentario text NOT NULL,
    data_comentario date DEFAULT CURRENT_DATE
);


ALTER TABLE public.comentarios OWNER TO filmes;

--
-- Name: comentarios_id_comentario_seq; Type: SEQUENCE; Schema: public; Owner: filmes
--

CREATE SEQUENCE public.comentarios_id_comentario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.comentarios_id_comentario_seq OWNER TO filmes;

--
-- Name: comentarios_id_comentario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: filmes
--

ALTER SEQUENCE public.comentarios_id_comentario_seq OWNED BY public.comentarios.id_comentario;


--
-- Name: filmes; Type: TABLE; Schema: public; Owner: filmes
--

CREATE TABLE public.filmes (
    id_filme integer NOT NULL,
    nome character varying(100) NOT NULL,
    descricao text NOT NULL,
    ano integer NOT NULL
);


ALTER TABLE public.filmes OWNER TO filmes;

--
-- Name: filmes_id_filme_seq; Type: SEQUENCE; Schema: public; Owner: filmes
--

CREATE SEQUENCE public.filmes_id_filme_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.filmes_id_filme_seq OWNER TO filmes;

--
-- Name: filmes_id_filme_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: filmes
--

ALTER SEQUENCE public.filmes_id_filme_seq OWNED BY public.filmes.id_filme;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: filmes
--

CREATE TABLE public.usuarios (
    id_usuario integer NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(255) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO filmes;

--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: filmes
--

CREATE SEQUENCE public.usuarios_id_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_usuario_seq OWNER TO filmes;

--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: filmes
--

ALTER SEQUENCE public.usuarios_id_usuario_seq OWNED BY public.usuarios.id_usuario;


--
-- Name: comentarios id_comentario; Type: DEFAULT; Schema: public; Owner: filmes
--

ALTER TABLE ONLY public.comentarios ALTER COLUMN id_comentario SET DEFAULT nextval('public.comentarios_id_comentario_seq'::regclass);


--
-- Name: filmes id_filme; Type: DEFAULT; Schema: public; Owner: filmes
--

ALTER TABLE ONLY public.filmes ALTER COLUMN id_filme SET DEFAULT nextval('public.filmes_id_filme_seq'::regclass);


--
-- Name: usuarios id_usuario; Type: DEFAULT; Schema: public; Owner: filmes
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuarios_id_usuario_seq'::regclass);


--
-- Data for Name: comentarios; Type: TABLE DATA; Schema: public; Owner: filmes
--

COPY public.comentarios (id_comentario, id_usuario, id_filme, comentario, data_comentario) FROM stdin;
1	1	1	Filme massa\r\n	2026-10-06
2	1	1	legal de mais\r\n	2026-10-06
4	2	3	AMOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO	2026-10-06
6	1	4	Um pequeno dinossauro\r\n\r\n	2026-10-06
7	1	4	Um pequeno dinossauro\r\n\r\n	2026-10-06
8	1	4	Um pequeno dinossauro\r\n\r\n	2026-10-06
9	10	1	Teste de comentários	2026-10-08
10	2	8	namoral man\r\n	2026-10-08
11	23	9	Nunca comprei la por ser apenas pra elite!	2026-10-08
12	2	11	teste	2026-10-08
13	25	10	amei o filme, a mayara é minha idola :)\r\n	2026-10-08
14	15	12	Finalmente revelaram a verdade!!!!!	2026-10-08
15	29	12	Sempre soubee	2026-10-08
16	2	3	Ryan gosling 	2026-10-08
\.


--
-- Data for Name: filmes; Type: TABLE DATA; Schema: public; Owner: filmes
--

COPY public.filmes (id_filme, nome, descricao, ano) FROM stdin;
3	Project Hail Mary	Ryan goslyng tava bom de mais	2026
4	O pequeno dinossauro	Dinossauro pequeno né	2000
6	Vingadores Ultimato		2019
7	A volta dos que não foram	A volta dos que não foram	1781
8	Como afogar o ganso	Aprenda a afogar o ganso	1984
5	Cindelera Baiana	uma cindelera que não é cinderela	1998
9	PicoModas	Filme conta sobre uma familia de alta classe nos suburbios de santa barbara em 1930, que criou o império tao famoso e conhecido até hoje PicoModas!	2026
10	Mayara a história por tras da fama	A pelicula revela a verdadeira historia por trás dos bastidores da vida da herdeira Mayara Zigart, filha de Sidney Zigart e Rosemary Zigart, os monarcas donos da grande rede PicoModas. Mayara é trabalhadora da rede disney atuando como Miney em grande parte de sua carreira, sua vida era simples apesar da fama e riquesa familiar, tendo apenas o seu cachorro, seu grande escudeiro para suas artimanhas.. Thor. Até que uma Mineira nascida no RJ vinda de SP ganhou seu coração, mas será que seu grande inimigo, a poderosa rede Cãochorro e seu maldoso chefe Quiabo vão dar uma trégua para que ela tenha tempo para o amor?! Confira hoje mesmo nos cinemas. 	2026
11	filme teste	teste	2026
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: filmes
--

COPY public.usuarios (id_usuario, email, senha) FROM stdin;
1	pietra@hotmail.com	1234
2	john@gmail.com	Sherlockd
3	isabela@gmail	22
4	laura.m.silveira@edu.senai.br	123456
5	andersonDaSilva@andersonDaSilva	123456
6	claude_gemini@gmail.com	123456
7	andersonDaSilva@andersonDaSilva	123456
8	nicollas.goncalves@edu.senai.br	102030
9	murillo@gmail.com	1234
10	jorge@jorge.com.br	123456
11	sophie.carvalho@gmail.com	1234
12	isabela@gmail	123
13	miguel.s.silva9@edu.senai.br	Gnms@2020
14	isabela@gmail	123
15	sherlock@hotmail.com	john
16	Moriarty@gmail.com	1234
17	gabrielli.balbino@edu.senai.br	1234567890
18		
19	aliciaelizabethpilarflor@gmail.com	Senai2822!
20	a@gmail.com	303020
21	caue.p.silva@edu.senai.br	123
22	caue.p.silva@edu.senai.br	123
23	elis.perin6@gmail.com	1234
24	john@gmail.com	Sherlockd
25	John@gmail.com	Sherlockd
26	Teste@gmail.com	1234
27	Yuri@teste.com	123456
28	yuriteste@gmail.com	12345
29	john@hotmail.com	1234
\.


--
-- Name: comentarios_id_comentario_seq; Type: SEQUENCE SET; Schema: public; Owner: filmes
--

SELECT pg_catalog.setval('public.comentarios_id_comentario_seq', 16, true);


--
-- Name: filmes_id_filme_seq; Type: SEQUENCE SET; Schema: public; Owner: filmes
--

SELECT pg_catalog.setval('public.filmes_id_filme_seq', 12, true);


--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: filmes
--

SELECT pg_catalog.setval('public.usuarios_id_usuario_seq', 29, true);


--
-- Name: comentarios comentarios_pkey; Type: CONSTRAINT; Schema: public; Owner: filmes
--

ALTER TABLE ONLY public.comentarios
    ADD CONSTRAINT comentarios_pkey PRIMARY KEY (id_comentario);


--
-- Name: filmes filmes_pkey; Type: CONSTRAINT; Schema: public; Owner: filmes
--

ALTER TABLE ONLY public.filmes
    ADD CONSTRAINT filmes_pkey PRIMARY KEY (id_filme);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: filmes
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id_usuario);


--
-- PostgreSQL database dump complete
--

\unrestrict eH0LhgLI72l7ORgvf7i9hXhXX2ZbPtWiyDI9dstpuFbXNZ3xelwRY5cJzNf3HdH

