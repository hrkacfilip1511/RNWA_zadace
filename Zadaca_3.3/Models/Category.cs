namespace REST.Models
{
    public partial class Category
    {
        public byte CategoryId { get; set; }
        public string? CategoryName { get; set; }
        public byte? CategoryActive { get; set; }
        public byte? CategoryStatus { get; set; }
    }
}
