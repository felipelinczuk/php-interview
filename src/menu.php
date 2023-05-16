<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>

                <?php
                    $array = array(
                        1 => array("title" => "Dashboard", "li-class" => "start active", "i-class" => "fa fa-home", "span-class" => "selected", "link" => "index.php", "parent" => 0),
                        2 => array("title" => "Cadastro", "li-class" => "", "i-class" => "fa fa-file-text", "span-class" => "arrow", "link" => "javascript:;", "parent" => 0),
                        3 => array("title" => "Relatório", "li-class" => "", "i-class" => "fa fa-bar-chart-o", "span-class" => "arrow", "link" => "javascript:;", "parent" => 0),
                        4 => array("title" => "Cliente", "link" => "#", "parent" => 2),
                        5 => array("title" => "Fornecedor", "link" => "#", "parent" => 2),
                        6 => array("title" => "Perfil de acesso", "link" => "#", "parent" => 2),
                        7 => array("title" => "Produtos", "link" => "#", "parent" => 2),
                        8 => array("title" => "Usuário", "link" => "#", "parent" => 2),
                        9 => array("title" => "Cliente", "link" => "#", "parent" => 3),
                        10 => array("title" => "Faturamento", "link" => "#", "parent" => 3),
                        11 => array("title" => "Produtos", "link" => "#", "parent" => 3),
                    );
                

                    function buildSubMenu($array, $parent){
                        $html2 = '<ul class="sub-menu">';

                        foreach($array as $item){
                            $id = array_search($item, $array);
                            if($array[$id]["parent"] == $parent){
                                $html2 .= '<li><a href="' . $array[$id]['link'] . '">'. $array[$id]['title'] . '</a></li>';  
                            }
                        }
                        $html2 .= '</ul>';
                        return $html2;
                    }
                    
                    function buildMenu($array){
                        $html = "";
                        foreach($array as $item){
                            $id = array_search($item, $array);
                            
                            if($array[$id]["parent"] == 0){
                                $html .= '<li class="' . $array[$id]['li-class'] . '"><a href="' . $array[$id]['link'] . '"><i class="' . $array[$id]['i-class'] . '"></i><span class="title">' . $array[$id]['title'] . '</span><span class="' . $array[$id]['span-class'] . '"></span></a>';
                                $html .= buildSubMenu($array, $id);
                            }
                        }
                        $html .= "</li>";
                        return $html;
                    }

                    print buildMenu($array);

                ?>
                    



                