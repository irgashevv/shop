<?php

include_once __DIR__ . "/../../../common/src/Service/DBConnector.php";

class Fixture01 
{
	private $conn;

	private $data = 
	[
		[
			'id' => 'null',
			'title' => 'Мифы мира. Древний Египет',
			'picture' =>'01.jpg',
			'preview' =>'Египетская цивилизация - одна из самых прочных и поразительных цивилизаций 
			в мировой истории. Она стала фундаментальной основой наследия всего человечества, 
			сохранив при этом свою уникальность. Мифология страны на Ниле отражает своеобразие 
			и богатство яркой культуры, расцветшей среди песков пустыни....',
			'content' =>'Незабываемое путешествие вглубь времен, когда люди верили, что миром 
			управляют многочисленные боги. сотворившие его. Самые известные мифы народов мира: 
			- о зарождении и устройстве Вселенной - о рождении и смерти - о любви и предательстве
			 - о борьбе и дружбе',
			'price' =>'63',
			'status' =>'1',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Джордан Белфорт: Волк с Уолл-стрит',
			'picture' =>'02.jpg',
			'preview' =>'Автор этой книги - знаменитый делец с Уолл-стрит, биржевой 
			брокер-махинатор, основатель одной из крупнейших финансовых "прачечных" 
			конца XX века. Каждая страница его мемуаров так и дышит гламуром 1990-х: 
			самые быстрые тачки, самые длинные яхты, самые роскошные женщины - и на все
			 это проливается непр...',
			'content' =>'и на все это проливается непрерывный дождь хрустящих денежных купюр.
			 Жизнь-сказка, фантастический успех, за которым следует столь же головокружительное
			  падение: предательство друзей, тюремный срок за мошенничество, пожизненный запрет
			   на профессию... В общем, настоящее голливудское кино - не даром же великий Мартин
			    Скорсезе снял по этой книге один из самых дорогих фильмов в истории Голливуда, и 
			    главную роль в нем исполнил Леонардо ди Каприо...',
			'price' =>'84',
			'status' =>'2',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Анна Тодд: После',
			'picture' =>'03.jpg',
			'preview' =>'Тесса была тихой и примерной девочкой. Пока не встретила Хардина – чертовски 
			привлекательного, по-настоящему плохого парня, которому плевать на все правила. Между ними 
			промелькнула не просто искра, это был мощный электрический разряд. Так их жизнь навсегда разделилась 
			на до и после…Скачать книгу бес...',
			'content' =>'Тесса была тихой и примерной девочкой. Пока не встретила Хардина – 
			чертовски привлекательного, по-настоящему плохого парня, которому плевать на 
			все правила. Между ними промелькнула не просто искра, это был мощный электрический
			 разряд. Так их жизнь навсегда разделилась на до и после…',
			'price' =>'99',
			'status' =>'3',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Уолтер Айзексон: Стив Джобс (2010)',
			'picture' =>'04.jpg',
			'preview' =>'Эту книгу журналисту Уолтеру Айзексону предложил написать сам
			 Стив Джобс, когда ему уже был известен страшный диагноз. Биография "отца цифровой
			  революции" была создана при его непосредственном участии, однако от какого-либо
			   контроля за содержанием Джобс уклонился: в результате книга получила...',
			'content' =>'В основу книги Уолтера Айзексона "Стив Джобс" легли беседы с самим 
			Стивом Джобсом, а также с его родственниками, друзьями, врагами, соперниками и коллегами. 
			Джобс никак не контролировал автора. Он откровенно отвечал на все вопросы и ждал такой же 
			честности от остальных. Это рассказ о жизни, полной падений и взлетов, о сильном человеке и
			 талантливом бизнесмене, который одним из первых понял: чтобы добиться успеха в XXI веке, 
			 нужно соединить креативность и технологии. Книга вышла в США в октябре 2011 года.',
			'price' =>'182',
			'status' =>'4',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Айзексон Уолтер: Эйнштейн. Его жизнь и его Вселенная',
			'picture' =>'05.jpg',
			'preview' =>'Цитата "Потрясающее удовольствие… Это - теплый, глубокий, нежный портрет, 
			показывающий Эйнштейна человечным и необычайно очаровательным по своей сути… Удивительно
			 законченный образ вечно поражающей личности Эйнштейна". Джэнет Маслин, Нью-Йорк Таймс 
			 "Этой книгой будут восторгаться повсеместн...',
			'content' =>'Цитата
            "Потрясающее удовольствие… Это - теплый, глубокий, нежный портрет, показывающий Эйнштейна 
            человечным и необычайно очаровательным по своей сути… Удивительно законченный образ вечно
            поражающей личности Эйнштейна".
            Джэнет Маслин, Нью-Йорк Таймс
            "Этой книгой будут восторгаться повсеместно. Ее потрясающе легко читать, 
            в ней изящно сочетаются личные и научные аспекты жизни Эйнштейна".
            Геральд Холтон, профессор физики',
			'price' =>'145',
			'status' =>'5',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
        [
			'id' => 'null',
			'title' => 'Мифы мира. Древний Египет',
			'picture' =>'01.jpg',
			'preview' =>'Египетская цивилизация - одна из самых прочных и поразительных цивилизаций 
			в мировой истории. Она стала фундаментальной основой наследия всего человечества, 
			сохранив при этом свою уникальность. Мифология страны на Ниле отражает своеобразие 
			и богатство яркой культуры, расцветшей среди песков пустыни....',
			'content' =>'Незабываемое путешествие вглубь времен, когда люди верили, что миром 
			управляют многочисленные боги. сотворившие его. Самые известные мифы народов мира: 
			- о зарождении и устройстве Вселенной - о рождении и смерти - о любви и предательстве
			 - о борьбе и дружбе',
			'price' =>'63',
			'status' =>'1',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Джордан Белфорт: Волк с Уолл-стрит',
			'picture' =>'02.jpg',
			'preview' =>'Автор этой книги - знаменитый делец с Уолл-стрит, биржевой 
			брокер-махинатор, основатель одной из крупнейших финансовых "прачечных" 
			конца XX века. Каждая страница его мемуаров так и дышит гламуром 1990-х: 
			самые быстрые тачки, самые длинные яхты, самые роскошные женщины - и на все
			 это проливается непр...',
			'content' =>'и на все это проливается непрерывный дождь хрустящих денежных купюр.
			 Жизнь-сказка, фантастический успех, за которым следует столь же головокружительное
			  падение: предательство друзей, тюремный срок за мошенничество, пожизненный запрет
			   на профессию... В общем, настоящее голливудское кино - не даром же великий Мартин
			    Скорсезе снял по этой книге один из самых дорогих фильмов в истории Голливуда, и 
			    главную роль в нем исполнил Леонардо ди Каприо...',
			'price' =>'84',
			'status' =>'2',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Анна Тодд: После',
			'picture' =>'03.jpg',
			'preview' =>'Тесса была тихой и примерной девочкой. Пока не встретила Хардина – чертовски 
			привлекательного, по-настоящему плохого парня, которому плевать на все правила. Между ними 
			промелькнула не просто искра, это был мощный электрический разряд. Так их жизнь навсегда разделилась 
			на до и после…Скачать книгу бес...',
			'content' =>'Тесса была тихой и примерной девочкой. Пока не встретила Хардина – 
			чертовски привлекательного, по-настоящему плохого парня, которому плевать на 
			все правила. Между ними промелькнула не просто искра, это был мощный электрический
			 разряд. Так их жизнь навсегда разделилась на до и после…',
			'price' =>'99',
			'status' =>'3',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Уолтер Айзексон: Стив Джобс (2010)',
			'picture' =>'04.jpg',
			'preview' =>'Эту книгу журналисту Уолтеру Айзексону предложил написать сам
			 Стив Джобс, когда ему уже был известен страшный диагноз. Биография "отца цифровой
			  революции" была создана при его непосредственном участии, однако от какого-либо
			   контроля за содержанием Джобс уклонился: в результате книга получила...',
			'content' =>'В основу книги Уолтера Айзексона "Стив Джобс" легли беседы с самим 
			Стивом Джобсом, а также с его родственниками, друзьями, врагами, соперниками и коллегами. 
			Джобс никак не контролировал автора. Он откровенно отвечал на все вопросы и ждал такой же 
			честности от остальных. Это рассказ о жизни, полной падений и взлетов, о сильном человеке и
			 талантливом бизнесмене, который одним из первых понял: чтобы добиться успеха в XXI веке, 
			 нужно соединить креативность и технологии. Книга вышла в США в октябре 2011 года.',
			'price' =>'182',
			'status' =>'4',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],
		[
			'id' => 'null',
			'title' => 'Айзексон Уолтер: Эйнштейн. Его жизнь и его Вселенная',
			'picture' =>'05.jpg',
			'preview' =>'Цитата "Потрясающее удовольствие… Это - теплый, глубокий, нежный портрет, 
			показывающий Эйнштейна человечным и необычайно очаровательным по своей сути… Удивительно
			 законченный образ вечно поражающей личности Эйнштейна". Джэнет Маслин, Нью-Йорк Таймс 
			 "Этой книгой будут восторгаться повсеместн...',
			'content' =>'Цитата
            "Потрясающее удовольствие… Это - теплый, глубокий, нежный портрет, показывающий Эйнштейна 
            человечным и необычайно очаровательным по своей сути… Удивительно законченный образ вечно
            поражающей личности Эйнштейна".
            Джэнет Маслин, Нью-Йорк Таймс
            "Этой книгой будут восторгаться повсеместно. Ее потрясающе легко читать, 
            в ней изящно сочетаются личные и научные аспекты жизни Эйнштейна".
            Геральд Холтон, профессор физики',
			'price' =>'145',
			'status' =>'5',
			'created' =>'2021-01-01 23:59:59',
			'updated' =>'2021-01-01 23:59:59'
		],

	];

	public function __construct(DBConnector $conn)
	{
		$this->conn = $conn->connect();
	}

	public function run()
	{
		foreach ($this->data as $product) 
		{
			copy( __DIR__ . "/../../fixtures_pics/" . $product['picture'], __DIR__ . "/../../../uploads/products/" . $product['picture']);
			$result = mysqli_query($this->conn, "INSERT INTO products VALUES (
				" . $product['id'] . ",
				'" . $product['title'] . "',
				'" . $product['picture'] . "',
				'" . $product['preview'] . "',
				'" . $product['content'] . "',
				'" . $product['price'] . "',
				'" . $product['status'] . "',
				'" . $product['created'] . "',
				'" . $product['updated'] . "')");
					if (!$result)
					{
						print mysqli_error($this->conn) . PHP_EOL;
					}
		}
	}
}