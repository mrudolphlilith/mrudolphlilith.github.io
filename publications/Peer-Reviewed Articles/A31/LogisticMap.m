(* 
	load this file: 		<< "LogisticMap.m"
*)

Clear["Global`*"]
Clear["All`*"]

(* ---------------------------------------------------------------------------- *)
(* global parameters															*)
(* ---------------------------------------------------------------------------- *)

nmax = 40
x0 = 0.4

(* ---------------------------------------------------------------------------- *)
(* Verhulst logistic map														*)
(* ---------------------------------------------------------------------------- *)

LogisticMap[ x_ , a_ ] := a * x * ( 1 - x )

LogisticMapT[ x0_ , a_ , max_ ] := (
	xn = ConstantArray[ 0 , max + 1 ];
	
	xn[[1]] = x0;

	Do[
		xn[[n+1]] = LogisticMap[ xn[[n]] , a ],
		{ n , 1 , max }
	];
	
	Return[ xn ];
);

(* ---------------------------------------------------------------------------- *)
(* explicit solution for a=4													*)
(* ---------------------------------------------------------------------------- *)

f[ t_ , x0_ ] = 1/2 * ( 1 - Cos[ 2^t * ArcCos[ 1 - 2 * x0 ] ] )

(* ---------------------------------------------------------------------------- *)
(* difference between explicit solution for a=4 and logistic map for a<4		*)
(* at step nmax																	*)
(* ---------------------------------------------------------------------------- *)

diff = {};

astart = 3.61
aend = 3.6
deltaa = 0.000001

Do[
	diff = Append[ diff , { ( astart - a ) , ( f[ nmax , x0 ] - Last[ LogisticMapT[ x0 , a , nmax ] ] ) } ],
	{ a , astart , aend , -deltaa }
]

Write[$Display, 
	Show[ 
		ListPlot[ 
			diff , 
			Joined->True , Filling->None , PlotStyle->Directive[ Red ] 
		]
	]
]

Export[ "Results.dat" , N[ diff ] , "Table" ]
