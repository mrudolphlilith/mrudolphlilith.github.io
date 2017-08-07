<div class="pubitem">
	<span class="pubitem_title">On a representation of the Verhulst logistic map</span><br><br>
	<span class="pubitem_authors">Michelle Rudolph-Lilith, Lyle E. Muller</span><br><br>
	<span class="pubitem_reference">Discrete Math. 324: 19-27, 2014</span>
</div>

<div class="pubitem_links"><a href="https://drive.google.com/file/d/0BxWNHu-AOXGhYjRZdDF4cFNlcE0/edit?usp=sharing" target="_blank"><img src="../img/iconPDF.png" border="0"></a></div>

<div style="clear:both;"></div>

<h3><span>Abstract</span></h3>

<p>One of the simplest polynomial recursions exhibiting chaotic behavior is the logistic map 
$$x_{n+1} = a x_n ( 1 - x_n )$$ with $x_n, a \in \mathbb{Q}: x_n \in [0,1] \ \forall n \in \mathbb{N}$ 
and $a \in (0,4]$, the discrete-time model of the differential growth introduced by Verhulst almost 
two centuries ago (Verhulst, 1838) [12]. Despite the importance of this discrete map for the field of 
nonlinear science, explicit solutions are known only for the special cases $a = 2$ and $a = 4$. 
In this article, we propose a representation of the Verhulst logistic map in terms of a finite 
power series in the map's growth parameter $a$ and initial value $x_0$ whose coefficients are given 
by the solution of a system of linear equations. Although the proposed representation cannot be 
viewed as a closed-form solution of the logistic map, it may help to reveal the sensitivity of the 
map on its initial value and, thus, could provide insights into the mathematical description of 
chaotic dynamics.</p>

<h3><span>Supplementary Information and Material</span></h3>

<h4>Some thoughts about closed-form solutions and smoothness in $a$</h4>

<p>On <a href="http://mathworld.wolfram.com" target="_blank" class="tlink">Mathworld</a> it is 
conjectured that it may not be possible to solve the logistic recurrence in closed form [1]. 
However, Wolfram has also postulated that any exact solution, if it were possible, must be of the form
$$
x_n = \frac{1}{2} \left\{ 1 - f \left[ a^n f^{-1} (1-2x_0) \right] \right\}
$$
with $f$ being some function and $f^{-1}$ its inverse [2]. In our study, we explicitly derive an 
exact solution, differing in form from this postulate, in terms of a finite power expansion in 
the recursive map's parameter a and initial value $x_0$, valid for all 
$x_0, a \in \mathbb{Q}: x_0 \in [0,1]$ and $a \in (0,4]$.</p>

<p>The proposed explicit form also questions the conjecture that a smooth solution cannot exist for generic values of 
$a$, with possible exceptions of $a$ even and nonzero (M. Trott, pers. comm.; see [1]), as a finite power expansion
in $a$ is, by definition, smooth in $a$. This observation can further be consolidated by a numerical evaluation of the recursive 
map at a given step $n$, for arbitrary $a$ and the known solution for $a=4$. Plotting the numerical difference 
$$
\Delta x_n (a) = \frac{1}{2} ( 1 - \cos[ 2^t \, \mbox{arcos}[ 1 - 2 x_0 ] ] ) - x_n(a)
$$
between both mappings as a function of $a$ reveals a non-trivial but clearly smooth change with $a$ if the precision is 
chosen sufficiently (see Fig. 1; <tt>Mathematica</tt> code snippet can be found below).</p>
  
<table>
  <tr>
    <td align="left"><img src="Peer-Reviewed Articles/A31/suppFig_DeltaX.jpg"></td>
    <td width="20px"></td>
    <td class="tsmall">       
      <b>Figure 1:</b> Difference $\Delta x_n (a)$ between the solution of the logistic map for $a=4$ and the recursive (numerical) solution $x_n(a)$ 
      at arbitrary $a$ for a fixed step $n=10$ and two different initial values $x_0$ as function of $\Delta a = 4-a$.
    </td>
  </tr>
</table>

<br>

<span class="tsmall"><b>References</b></span>
<table class="ttiny" style="margin-top:5px;" width="100%">
  <tr><td align="right">[1] &nbsp;</td><td>Weisstein, Eric W. "Logistic Map." From MathWorld-A Wolfram Web Resource. <a href="http://mathworld.wolfram.com/LogisticMap.html" target="_blank" class="tlink">http://mathworld.wolfram.com/LogisticMap.html</a>.</td></tr>
  <tr><td align="right">[2] &nbsp;</td><td>Wolfram, S. <emph>A New Kind of Science.</emph> Champaign, IL: Wolfram Media, p. 1098, 2002.</td></tr>
</table>

<br>

<h4><tt>Mathematica</tt></h4>

<p>A simple <tt>Mathematica</tt> code snippet defining the logistic map can be found <a href="Peer-Reviewed Articles/A31/LogisticMap.m" class="tlink">here</a>. It defines the following functions and procedures:</p>

<table style="margin-left:30px;margin-right:20px;" class="tsmall">
  <tr>
    <td><tt>LogisticMap[ x , a ]</tt></td>
    <td width="20px"></td>
    <td>defines the logistic map with parameter $a$</td>
  </tr>
  <tr>
    <td><tt>LogisticMapT[ x0 , a , max ]</tt></td>
    <td></td>
    <td>returns a list of map values up to step <tt>max</tt></td>
  </tr>
  <tr>
    <td><tt>f[ t , x0 ]</tt></td>
    <td></td>
    <td>defines the exact solution for $a=4$</td>
  </tr>
</table>

<br>

<p>The code generates a list <tt>diff</tt> containing $\Delta x_n (a)$ up to step <tt>nmax</tt>, and writes the result to
a file named "Results.dat"</p>
