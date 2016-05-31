<?php 
//分页工具类
//命名空间的名称与上级名录tools一致
//原因：当前page.class.php类文件会被自动加载机制引入
//		在引入的同时会把"tools"变为文件的上级目录,进而获得该page类文件
namespace Tools;

class Page{
	private $total;		//数据表中总记录数
	private $listRows;	//每页显示行数
	private $limit;
	private $uri;
	private $pageNum	//页数
	private $config = array(
						'header' => '个记录',
						'prev' => '上一页',
						'next' => '下一页',
						'first' => '首 页',
						'last' => '尾 页');
	private $listNum = 8;

	public function __construct($total, $listRows=10, $pa=""){
		$this->total = $total;
		$this->listRows = $listRows;
		$this->uri = $this->getUri($pa);
		$this->page = !empty($_GET['page']) ? $_GET['page'] : 1;
		$this->pageNum = ceil($this->total / $this->listRows);
		$this->limit = $this->setLimit();
	}

	private function setLimit() {
		return "Limit " . ($this->page-1) * $this->listRows . ", {$this->listRows}";
	}

	private function getUri($pa) {
		$url = $_SERVER["REQUEST_URI"] . (strpos($_SERVER["REQUEST_URI"], '?') ? '' : "?") . $pa;
		$parse = parse_url($url);

		if (isset($parse['query'])) {
			parse_str($parse['query'], $params);
			unset($params['page']);
			$url = $parse['path'] . '?' . http_build_query($params);
		}
		return $url;
	}

	public function __get($args) {
		if ($args == 'limit') {
			return $this->limit
		} else {
			return null;
		}
	}

	private function start() {
		if ($this->total == 0) {
			return 0;
		} else {
			return ($this->page - 1) * $this->listRows + 1;
		}
	}

	private function end() {
		return min($this->page * $this->listRows, $this->total);
	}

	private function first() {
		$html = "";
		if ($this->page == 1) {
			$html .= '';
		} else {
			$html .= "&nbsp;&nbsp;<a href='{$this->uri}&page=1'>{$this->config['first']}</a>&nbsp;&nbsp;";
		}
		return $html;
	}

	private function prev() {
		$html = "";
		if ($this->page == 1) {
			$html .= '';
		} else {
			$html .= "&nbsp;&nbsp;<a href='{$this->uri}&page=" . ($this->page - 1) . "'>{$this->config["prev"]}</a>&nbsp;&nbsp;"
		}
		return $html;
	}

	private function pageList() {
		$linkPage = "";
		$inum = floor($this->listNum / 2);
		for ($i=$inum; $i >= 1; $i--) { 
			$page = $this->page - $i;
			if ($page < 1) {
				continue;
			}
			$linkPage .= "&nbsp;<a href='{$this->uri}$page={$page}'>{$page}</a>&nbsp;";
		}
		$linkPage .= "&nbsp;{$this->page}&nbsp";

		for ($i=1; $i <= $inum ; $i++) { 
			$page = $this->page + $i;
			if ($page <= $this->pageNum) {
				$linkPage .= "&nbsp;<a href='{$this->uri}&page={$page}'>{$page}</a>&nbsp;";
			} else {
				break;
			}
		}
		return $linkPage;
	}

	private function next() {
		$html = "";
		if ($this->page == $this->pageNum) {
			$html .= '';
		} else {
			$html .= "&nbsp;&nbsp<a href='{$this->uri}&page="
		}
	}
}