const { GraphQLObjectType } = require("graphql");

const fieldsPosts = require("./posts");
const fieldsCategory = require("./category");
const fieldsProducts = require("./products");
const Query = new GraphQLObjectType({
  name: "Query",
  fields: {
    posts: fieldsPosts,
    category: fieldsCategory,
    products: fieldsProducts,
  },
});

module.exports = Query;
