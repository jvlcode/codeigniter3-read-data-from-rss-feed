<?php 

	class Home extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

		}
		public function index(){
			$url = "https://timesofindia.indiatimes.com/rssfeedstopstories.cms?x=1";
			$content = file_get_contents($url);

			$rss_objects = new SimpleXMLElement($content);
		
			foreach ($rss_objects->channel->item as $key => $rss_object) {
				$data[] = [
							'title'=> $rss_object->title,
							'description'=>$rss_object->description,
							'link'=>$rss_object->link,
							'image'=>$rss_objects->channel->image->url,
							'pub_date'=>$rss_object->pubDate
				];
			
			}

			$this->load->view('blogs',array('data'=>$data));
		}
	}
