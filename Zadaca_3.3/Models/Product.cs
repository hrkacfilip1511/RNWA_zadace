using System;
using System.Collections.Generic;

namespace REST.Models
{
    public partial class Product
    {
        public byte ProductId { get; set; }
        public string? ProductName { get; set; }
        public byte? BrandId { get; set; }
        public byte? CategoryId { get; set; }
        public string? Quantity { get; set; }
        public string? Rate { get; set; }
        public bool? Active { get; set; }
        public bool? Status { get; set; }
    }
}
