(* 
	load this file: 		<< "ER_VarianceN1.m"
*)

Clear["Global`*"]
Clear["All`*"]

(* ---------------------------------------------------------------------------- *)
(* analytics																	*)
(* ---------------------------------------------------------------------------- *)

(* ---------------------------------------------------------------------------- *)
(* globals																		*)
(* ---------------------------------------------------------------------------- *)

niterations = 100;
n = 100;
psteps = 20;

(* ---------------------------------------------------------------------------- *)
(* 																				*)
(* ---------------------------------------------------------------------------- *)

aij = ConstantArray[ 0 , { n , n } ];

var = ConstantArray[ 0 , niterations ];
avgvar = ConstantArray[ 0 , { psteps+1 , 2 } ];

(* ---------------------------------------------------------------------------- *)
(* 																				*)
(* ---------------------------------------------------------------------------- *)

CellPrint[ Cell[ "VARIANCE A", Background->Lighter[ Blue , 0.1 ] , White, Bold ] ]

Do[
	Do[
		Do[
			aij[[ i , j ]] = If[ i == j , 0 , If[ RandomReal[] < (p-1)/psteps , 1 , 0 ] ]
			, { i , 1 , n } , { j , 1 , n }
		];
	
		var[[ i ]] = Variance[ Flatten[ aij ] ];
		
		, { i , 1 , niterations }
	];

	avgvar[[ p , 1 ]] = N[ (p-1)/psteps ];
	avgvar[[ p , 2 ]] = Mean[ var ];
	
	, { p , 1 , psteps+1 }
]

aavgvar[p_] := (n-1)/n * p * (1-p*(n-1)/n)^2 + (n-1)^3 * (1-p)*p^2/n^3 + p^2 * (n-1)^2/n^3

Print[ Show[ ListPlot[ avgvar , PlotRange->All] , Plot[ aavgvar[p] , { p , 0 , 1 } , PlotRange->All ] ] ]

Print[ aavgvar[1.0]]
Print[ N[Last[avgvar]]]
