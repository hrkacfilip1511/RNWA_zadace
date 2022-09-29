const { GraphQLInt, GraphQLString, GraphQLList } = require("graphql");
const { dbQuery } = require("../../database");
const { ProductType } = require("../../types");

const fieldsProducts = {
  type: ProductType,
  args: {
    id: { type: GraphQLInt },
  },
  async resolve(_, { id }) {
    let res = await dbQuery(`SELECT * FROM Product`);
    return res[0];
  },
};

module.exports = fieldsProducts;
