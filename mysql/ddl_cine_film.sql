-- ===========================================================================
-- ddl table FILM
-- ===========================================================================


CREATE TABLE IF NOT EXISTS film (
  id      int(8)        NOT NULL AUTO_INCREMENT,
  titre     varchar(250)  NOT NULL,
  resume    varchar(250)  NOT NULL,
  duree     varchar(50)   NOT NULL,
  CONSTRAINT pk_film  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- ===========================================================================
-- Contenu de la table FILM
-- ===========================================================================

INSERT INTO film (id, titre, resume, duree)
VALUES
(1, 'Star Wars I : La Menace fantôme', 'il y a bien longtemps, dans une galaxie lointaine, très lointaine… Qui-Gon Jinn et Obi-Wan Kenobi, deux chevaliers Jedi, sont dépêchés afin de régler un conflit sur la petite planète Naboo, mais se retrouvent pris en embuscade. Les événements vont rapidement les précipiter dans un conflit de dimension galactique et les entraîner sur une autre planète où ils feront la connaissance d’un jeune esclave, Anakin Skylwalker, qui se révèlera un puissant détenteur de la Force Jedi.', '2h35m'),
(2, 'Star Wars II : l attaque des clones', 'Dix ans après les événements de La Menace Fantôme, Anakin est désormais un jeune apprenti Jedi (padawan) aux côtés de son maître, Obi Wan Kenobi. Jeune et impétueux, il est cependant tiraillé de toute part entre son amitié pour le chancelier Palpatine, son amour pour la désormais sénatrice Amidala et sa fidélité au conseil Jedi. Parallèlement, Obi-Wan va découvrir un complot visant à faire rentrer la République en guerre contre la Fédération du Commerce à l’aide d’une armée de clones commandée il y a des années par un maître Jedi, aujourd’hui disparu.', '2h22m'),
(3, 'Star Wars III : Le Revanche des Sith', 'Trois après l’Attaque des clones, la galaxie est en guerre. Obi-Wan et Anakin sont chargés de libérer le chancelier Palpatine, qui vient d’être enlevé par le général Grievous et le comte Dooku. En réalité, Palpatine est le véritable ennemi, puisque c’est lui le seigneur Sith que les Jedi tentent de démasquer depuis le début. Sous son influence, Anakin cède de plus en plus au côté obscur de la Force : il se détache de son maître Obi-Wan et de sa femme, la reine Amidala, quitte à franchir la ligne et à devenir le nouveau seigneur Sith.', '2h20m'),
(4, 'Star Wars IV : La Guerre des Etoile', 'Dix-neuf années se sont écoulées depuis La Revanche des Sith. Mais l’Empire Galactique dirigé par Palpatine et son homme de main Dark Vador doit aujourd’hui faire face aux Rebelles. L’une d’entre elles, la Princesse Leia, est capturée et missionne deux droïdes de retrouver un vieil ermite. Sur leurs routes, ils font la connaissance d’un ouvrier agricole, un certain Luke Skywalker, qui se révèle être un puissant détenteur de la Force Jedi. Rejoints par un duo de contrebandiers, ils vont tenter de libérer la Princesse et de détruire l’arme ultime de l’Empire : l’Étoile noire.', '2h5m'),
(5, 'Star Wars V : L empire contre attaque', 'Malgré la destruction de l’Étoile noire dans Un nouvel espoir, l’Empire galactique est toujours aussi puissant et continue à persécuter les rebelles. Ceux-ci ont élu domicile sur la planète des glaces, Hoth. Le jeune Luke Skywalker s’en va quant à lui trouver un nouveau maître Jedi afin de maîtriser la Force. De leur côté, Han Solo et Leia s’en vont trouver de l’aider dans une étrange cité perchée dans les nuages et retrouvent une vielle connaissance de Han.', '2h7m'),
(6, 'Star Wars VI : Le Retour de Jedi', 'Sur Tatooine, les rebelles tentent de libérer Han Solo, qui s’est fait cryogéniser et a échoué entre les mains du criminel Jabba Le Hutt. Après une rude bataille, Luke Skywalker part faire ses adieux à son maître Yoda, tandis que toute l’équipe de héros se retrouve sur la planète Endor, afin de tenter de faire exploser la nouvelle Étoile de la mort. Luke s’en va finalement combattre l’Empereur et tente de rallier à sa cause Dark Vador, qui n’est autre que son propre père.', '2h 6m'),
(7, 'Star Wars : Rogue One: A Star Wars Story', 'Vingt ans après les événements relatés dans l''Épisode III, l''Empire dirigé d''une main de fer par Palpatine a étendu son pouvoir à travers toute la galaxie. Un groupe de rebelles tente de dérober les plans de l''arme la plus terrible que l''Empire ait mis au point : l''Étoile de la Mort. Jyn Erso, fille de l''un des architectes de l''arme en question, se retrouve mêlée malgré elle à cette terrible quête qui la conduira à retrouver un pilote de l''Empire (Bodhi Rook), capturé par un ancien ami (Saw Gerrera). Celui-ci vit sur Jedha en compagnie d''une petite armée de rebelles et semble avoir complètement perdu la tête. Mais l''Empire n''a que faire de ces rebelles et n''hésite pas éradiquer quiconque ose contrecarrer ses plans.', '2h13m'),
(8, 'Star Wars : Le Reveille de la force', 'Trente années ont passé depuis la destruction de l''Étoile noire, et la mort de Dark Vador et du Chancelier Suprême Palpatine. Luke Skywalker et tous les autres Jedi ont mystérieusement disparu, tandis qu''un nouvel ordre s''est peu à peu substitué à l''Empire galactique. Baptisé le Premier Ordre, il compte dans ses rangs le Sith Kylo Ren, qui fait régner la terreur dans toute la galaxie et qui répond aux ordres du mystérieux Snoke. C''est dans ce contexte que la jeune Rey recueille un jour le droid BB-8, lequel détient des indices sur la localisation de Luke. Aux commandes du Faucon Millenium, qu''elle retrouve un peu par hasard, la voilà plongée au coeur d''un complot qui semble totalement la dépasser...', '2h15m');



