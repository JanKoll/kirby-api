<?php  

// Um auf die API zugreifen zu können, MUSS im Kibry Panel 
// ein API-User angelegt werden. Mit dem API-User kann sich 
// dann mittels Basic Auth authentifiziert werden.

return[
    'debug' => true,
    'api' => [
        'basicAuth' => true,
        'allowInsecure' => true,
        'routes' => [
          [
            'pattern' => 'getPages',
            'action' => function() {
              return $this->site()->pages();
            }
          ],
          [
            'pattern' => 'getAllPages',
            'action' => function() {
              $pages = $this->site()->pages();
              $data = array();

              foreach ($pages as $page) {
                $children = [];
  
                foreach ($page->children() as $child) {
                  if ($child->isListed()) {
                    array_push($children, array(
                        'id' => $child->id(),
                        'title' => $child->content()->title()->value(),
                      )
                    );
                  }
                }
  
                array_push($data, array(
                    'id' => $page->id(),
                    'title' => $page->content()->title()->value(),
                    'children' => $children
                  )
                );
              };
  
              return $data;
            }
          ],
          [
            'pattern' => 'getTechnology/(:any)/(:any)',
            'action'  => function (string $category, string $technology) {
              $route = $this->site()->find($category)->find($technology);

              $data = array(
                'title' => $route->title()->value(),
                'text'  => $route->text()->value()
              );

              return $data;
            }
          ]
        ]
    ]
    ];