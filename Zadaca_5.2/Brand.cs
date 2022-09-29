using System;
using System.Collections.Generic;

namespace MVC
{
    public partial class Brand
    {
        public byte BrandId { get; set; }
        public string? BrandName { get; set; }
        public byte? BrandActive { get; set; }
        public byte? BrandStatus { get; set; }
    }
}
