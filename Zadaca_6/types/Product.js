const {
  GraphQLObjectType,
  GraphQLInt,
  GraphQLString,
  GraphQLList,
} = require("graphql");

const ProductType = new GraphQLObjectType({
  name: "Product",
  fields: {
    product_id: { type: GraphQLInt },
    product_name: { type: GraphQLString },
  },
});

module.exports = ProductType;
