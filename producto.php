class Producto {
  private $productoID;
  private $nombre;
  private $codigo;
  private $precioProductoID;
  private $vencimiento;
  private $stockProductosID;
  private $descripcion;
  

  public function __construct($productoID, $nombre, $codigo, $precioProductoID, $vencimiento, $stockProductosID, $descripcion) {
    $this->productoID = $productoID;
    $this->nombre = $nombre;
    $this->codigo = $codigo;
    $this->precioProductoID = $precioProductoID;
    $this->vencimiento = $vencimiento;
    $this->stockProductosID = $stockProductosID;
    $this->descripcion = $descripcion;
  }
  
  public function getProductoID() {
    return $this->productoID;
  }
  
  public function setProductoID($productoID) {
    $this->productoID = $productoID;
  }
  
  public function getNombre() {
    return $this->nombre;
  }
  
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  
  public function getCodigo() {
    return $this->codigo;
  }
  
  public function setCodigo($codigo) {
    $this->codigo = $codigo;
  }
  
  public function getPrecioProductoID() {
    return $this->precioProductoID;
  }
  
  public function setPrecioProductoID($precioProductoID) {
    $this->precioProductoID = $precioProductoID;
  }
  
  public function getVencimiento() {
    return $this->vencimiento;
  }
  
  public function setVencimiento($vencimiento) {
    $this->vencimiento = $vencimiento;
  }
  
  public function getStockProductosID() {
    return $this->stockProductosID;
  }
  
  public function setStockProductosID($stockProductosID) {
    $this->stockProductosID = $stockProductosID;
  }
  
  public function getDescripcion() {
    return $this->descripcion;
  }
  
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }
  }