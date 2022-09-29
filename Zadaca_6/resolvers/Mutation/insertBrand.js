const { GraphQLString, GraphQLInt } = require("graphql");
const { dbQuery } = require("../../database");
const { BrandType } = require("../../types");

const insertBrand = {
  type: BrandType,
  args: {
    brand_id: { type: GraphQLInt },
    brand_name: { type: GraphQLString },
    brand_active: { type: GraphQLInt },
    brand_status: { type: GraphQLInt },
  },
  async resolve(_, { brand_id, brand_name, brand_active, brand_status }) {
    let res = await dbQuery(
      `insert into brands ( brand_name, brand_active, brand_status) values ( '${brand_name}', '${brand_active}', '${brand_status}')`
    );
    return { id: brand_id, brand_name, brand_active, brand_status };
  },
};

module.exports = insertBrand;
