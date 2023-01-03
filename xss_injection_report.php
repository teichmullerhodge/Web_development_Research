//URL: domain/servico/<script></script>/22/infraestrutura-XXX-OCCULT-

//REQUEST PARAMETERS:

array (

	'controller' => 'servico',
	'action', => '<script><', //Suscetiple to xss injection, with <script/> on action. 
	'script>' => '22',
	'module' => 'default',
	)

therefore, if we inject:

array (

	'controller ' => 'servico/produto',
	'action', => '<get><post>',
	'OVERFLOW', => '22',
	'module', => 'default',
)

NORMAL PARAMETERS:

array (

	'controller' => 'servico',
	'action' = 'infraestrutura-',
	'$tag' = '35',

)

URL TO GET THE THIRD TAG:

/servico/infraestrutura/teste/22

array (

	'controller' => 'servico',
	'action' => 'infraestrutura',
	'teste' => '22',
	'module' => 'default',
)

//REPORT AS SECURITY ISSUE.
