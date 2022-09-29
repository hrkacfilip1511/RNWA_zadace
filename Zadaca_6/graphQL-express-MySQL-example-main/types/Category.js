const {
  GraphQLObjectType,
  GraphQLInt,
  GraphQLString,
  GraphQLList,
} = require("graphql");
const { dbQuery } = require("../database");
const BrandType = require("./Brand");
const CategoryType = new GraphQLObjectType({
  name: "Category",
  fields: () => ({
    category_id: { type: GraphQLInt },
    category_name: { type: GraphQLString },
    category_active: { type: GraphQLInt },
    category_status: { type: GraphQLInt },
    brand: {
      type: BrandType,
      resolve: async (category) => {
        let res = await dbQuery(
          `SELECT * FROM Brands WHERE brand_id = ${parseInt(
            category.category_id
          )}`
        );
        return res[0];
      },
    },
  }),
});

module.exports = CategoryType;
