<?php
class Compra_vehiculo
{

	private $precio_base;
	// Este campo pertenece a la clase
	static $ayuda = 4500;

	function __construct($gama)
	{
		if ($gama == "urbano") {
			$this->precio_base = 10000;
		} else if ($gama == "compacto") {
			$this->precio_base = 20000;
		} else if ($gama == "berlina") {
			$this->precio_base = 30000;
		}
	} // fin constructor

	function climatizador()
	{
		$this->precio_base += 2000;
	} // fin climatizador

	function navegador_gps()
	{
		$this->precio_base += 2500;
	} //fin navegador gps

	function tapiceria_cuero($color)
	{
		if ($color == "blanco") {

			$this->precio_base += 3000;
		} else if ($color == "beige") {

			$this->precio_base += 3500;
		} else {

			$this->precio_base += 5000;
		}
	} // fin tapicería

	function precio_final()
	{
		// $ayuda Al ser un campo estatico (que no pertenece a ningún objeto, sino a la clase) no podemos acceder a este campo con $this->(), por tanto tenemos que hacer uso de self::
		// En pocas palabras, para hacer referencia a un campo o método estatico necesitamos hacer uso de self::
		$valor_final = $this->precio_base - self::$ayuda;
		// $valor_final = $this->precio_base;

		return $valor_final;
	} // fin precio final
}// fin clase
