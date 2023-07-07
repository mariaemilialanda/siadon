class TicketCompra {
  private $ticketCompraID;
  private $numero;
  private $productoID;
  private $precioProductoID;
  private $total;
  private $emision;
  private $clienteID;
  

  public function __construct($ticketCompraID, $numero, $productoID, $precioProductoID, $total, $emision, $clienteID) {
    $this->ticketCompraID = $ticketCompraID;
    $this->numero = $numero;
    $this->productoID = $productoID;
    $this->precioProductoID = $precioProductoID;
    $this->total = $total;
    $this->emision = $emision;
    $this->clienteID = $clienteID;
  }
  
  public function getTicketCompraID() {
    return $this->ticketCompraID;
  }
  
  public function setTicketCompraID($ticketCompraID) {
    $this->ticketCompraID = $ticketCompraID;
  }
  
  public function getNumero() {
    return $this->numero;
  }
  
  public function setNumero($numero) {
    $this->numero = $numero;
  }
  
  public function getProductoID() {
    return $this->productoID;
  }
  
  public function setProductoID($productoID) {
    $this->productoID = $productoID;
  }
  
  public function getPrecioProductoID() {
    return $this->precioProductoID;
  }
  
  public function setPrecioProductoID($precioProductoID) {
    $this->precioProductoID = $precioProductoID;
  }
  
  public function getTotal() {
    return $this->total;
  }
  
  public function setTotal($total) {
    $this->total = $total;
  }
  
  public function getEmision() {
    return $this->emision;
  }
  
  public function setEmision($emision) {
    $this->emision = $emision;
  }
  
  public function getClienteID() {
    return $this->clienteID;
  }
  
  public function setClienteID($clienteID) {
    $this->clienteID = $clienteID;
  }
  

}
